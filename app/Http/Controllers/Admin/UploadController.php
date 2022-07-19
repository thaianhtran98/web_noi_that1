<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UploadService;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload)
    {
        $this->upload = $upload;
    }

    public function store(Request $request)
    {
//        dd('ádnoisandiasnio');
        $url = $this->upload->store($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        return response()->json(['error' => true]);
    }

    public function store_img_detail(Request $request)
    {

        $url = $this->upload->store_img_detail($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        return response()->json(['error' => true]);
    }

    public function store_slider(Request $request)
    {

        $url = $this->upload->store_slider($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
                'url'   => $url
            ]);
        }

        return response()->json(['error' => true]);
    }


    public function delete(Request $request)
    {

        $url = $this->upload->delete($request);
        if ($url !== false) {
            return response()->json([
                'error' => false,
            ]);
        }

        return response()->json(['error' => true]);
    }


}
