<?php


namespace App\Http\Services\Product;


use App\Models\Product;
use App\Models\products_detail;

class ProductService
{
    const LIMIT = 16;

    public function get($page = null)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb','id_sp')
            ->orderByDesc('id')
            ->when($page != null, function ($query) use ($page) {
                $query->offset($page * self::LIMIT);
            })
            ->limit(self::LIMIT)
            ->get();
    }

    public function show($id)
    {
        return Product::where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->firstOrFail();
    }

    public function more($id,$menu_id)
    {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
            ->where('active', 1)
            ->where('id', '!=', $id)
            ->where('menu_id',$menu_id)
            ->orderByDesc('id')
            ->limit(8)
            ->get();
    }

    public function get_img_detail($id){
        return products_detail::where('id_sp',$id)->get();
    }

    public function view_plus($id){
        $product = Product::where('id',$id)->first();
        $product->view += 1;
        return $product->save();
    }

    public function get_product_new(){
        return Product::where('active',1)->orderByDesc('id')->paginate(20);
    }

}
