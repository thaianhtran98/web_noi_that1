<?php


namespace App\Http\Services\Product;


use App\Models\Menu;
use App\Models\producst_detail;
use App\Models\Product;
use App\Models\products_detail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductAdminService
{
    public function getMenu()
    {
        return Menu::where('active', 1)->where('parent_id','<>',0)->get();
    }

    protected function isValidPrice($request)
    {
        if ($request->input('price') != 0 && $request->input('price_sale') != 0
            && $request->input('price_sale') >= $request->input('price')
        ) {
            Session::flash('error', 'Giá giảm phải nhỏ hơn giá gốc');
            return false;
        }

        if ($request->input('price_sale') != 0 && (int)$request->input('price') == 0) {
            Session::flash('error', 'Vui lòng nhập giá gốc');
            return false;
        }

        return  true;
    }

    public function insert($request)
    {
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice === false) return false;

        try {
            $request->except('_token');
//            dd($request->input('img_detail'));
            Product::create($request->all());

            $product = Product::orderByDesc('id')->first();

            foreach ($request->input('img_detail') as $img_detail){
                products_detail::create([
                    'id_sp'=>(integer)$product->id,
                    'thumb_detail'=>(string)$img_detail,
                ]);
            }

            Session::flash('success', 'Thêm Sản phẩm thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return  false;
        }

        return  true;
    }

    public function get()
    {
        return Product::with('menu')
            ->orderByDesc('id')->get();
    }

    public function update($request, $product)
    {
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice === false) return false;

        try {
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request)
    {
        $product = Product::where('id', $request->input('id'))->first();
        if ($product) {
            $path = str_replace('/web_noi_that1/public/storage', 'public', $product->thumb);
            Storage::delete($path);
            $product->delete();
            return true;
        }

        return false;
    }

    public function get_img_detail($id){
        return products_detail::where('id_sp',$id)->get();
    }
}
