<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TemporaryFile;
use App\Http\Controllers\Controller;


class UploadImgController extends Controller
{
    //

    public function store(Request $request) {

        if($request->hasFile('img')){
            $file = $request->file('img');
            $filename = uniqid().'-'.$file->getClientOriginalName();
            $folder = 'profile';
            $path = 'img/'.$folder.'/'.$filename;
            $file->storeAs('/img//'.$folder,$filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename,
                'path' => $path
            ]);

            return $file;
        }
    }

    public function destroy(Request $request) {

        // if($request->hasFile('img')){
        //     $file = $request->file('img');
        //     $filename = $file->getClientOriginalName();
        //     $folder = uniqid().'-'.now()->timestamp;
        //     Storage::delete($file);

        //     return $file;
        // }
    }
}
