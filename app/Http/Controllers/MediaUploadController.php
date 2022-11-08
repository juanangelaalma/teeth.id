<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;
use Image;

use function PHPUnit\Framework\fileExists;

class MediaUploadController extends Controller
{
    public function upload(Request $request) {
        $image = $request->file('file');
        $filename = time() . '.' . $image->extension();
        $pathname = '/storage/uploads/';
        $fullpath = $pathname . $filename;
        
        // compress the image
        $image_compressed = ImageService::compressImage($image, 600, 450, $pathname);
        // store image
        $image_compressed->save(public_path($pathname . $filename));
        return response()->json(['location' => $fullpath]);
    }
}