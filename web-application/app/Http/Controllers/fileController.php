<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;



class fileController extends Controller
{
    public function getWorkerPicture($firstName,$lastName)
    {
        $path = storage_path().'\app\upload\workers\\'.$firstName.'-'.$lastName.'\picture.jpg';
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function getLocationPicture($location)
    {
        $path = storage_path().'\app\upload\locations\\'.$location.'\picture.jpg';
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function getProductPicture($product)
    {
        $path = storage_path().'\app\upload\products\\'.$product.'\picture.jpg';
        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}


