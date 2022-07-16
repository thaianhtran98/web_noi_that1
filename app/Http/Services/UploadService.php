<?php


namespace App\Http\Services;


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


//    public function store_thumb($request){
//        if($request->hasFile('thumb')){
//            try {
//                $name= $request->file('thumb')->getClientOriginalName();
//
//                $pathFull ='uploads/thumb';
//                $path = $request->file('thumb')->storeAs(
//                    'public/'. $pathFull , $name
//                );
//
//                return '/storage/' . $pathFull . '/' . $name;
//            }catch (\Exception $error){
//                return false;
//            }
//        }
//    }

}
