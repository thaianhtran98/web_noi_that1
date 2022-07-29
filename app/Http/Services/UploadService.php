<?php


namespace App\Http\Services;


use App\Models\products_detail;
use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function store($request)
    {

//        dd($request->file('file')->getClientOriginalName());
        if ($request->hasFile('file')) {
            try {
                $name = $request->file('file')->getClientOriginalName();
//                dd($name);
                $pathFull = 'uploads' ;
//
//                dd($request->file('file')->storeAs(
//                    '/public/' . $pathFull, $name
//                ));
                $request->file('file')->storeAs(
                    '/public/' . $pathFull, $name
                );
                return '/web_noi_that1/public/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }

    public function store_img_detail($request)
    {
        if ($request->hasFile('file')) {
            try {
                $name = $request->file('file')->getClientOriginalName();


                $pathFull = 'uploads_detail/' . $request->input('id_sp') ;

                $request->file('file')->storeAs(
                    '/public/' . $pathFull, $name
                );
                return '/web_noi_that1/public/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }


    public function store_slider($request)
    {
        if ($request->hasFile('file')) {
            try {
                $name = $request->file('file')->getClientOriginalName();

                $pathFull = 'uploads_slider' ;

                $request->file('file')->storeAs(
                    '/public/' . $pathFull, $name
                );
                return '/web_noi_that1/public/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }


    public function delete($request)
    {
        products_detail::where('thumb_detail',$request->img)->delete();
        $path = str_replace('/web_noi_that1/public/storage', 'public', $request->img);
        Storage::delete($path);
        return true;
    }


}
