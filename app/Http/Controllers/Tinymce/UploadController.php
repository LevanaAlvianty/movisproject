<?php

namespace App\Http\Controllers\Tinymce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            $filename = date('YmdHis', time()).'_'.$file->getClientOriginalName();
            $file->move(base_path().'/public/storage/tinymce/upload', $filename);
            
            $data['location'] = asset('/storage/tinymce/upload/'.$filename);
            return response()->json($data);
        }
    }
}
