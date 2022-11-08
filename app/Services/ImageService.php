<?php

namespace App\Services;

use Image;

class ImageService
{
    static $image_compressed;
    static function checkDir($dir) {
        if($dir[0] == '/') {
            $dir = ltrim($dir, $dir[0]);
        }
        if(!file_exists($dir)){
            mkdir($dir);
        }
    }
    static function compressImage($image, $width, $height, $path) {
        self::checkDir($path);
        self::$image_compressed = Image::make($image->getRealPath());
        self::$image_compressed->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        return self::$image_compressed;
    }
}
