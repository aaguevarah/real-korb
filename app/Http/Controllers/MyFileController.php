<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MyFileController extends Controller
{
    public function images($image)
    {
        $path="/upload/profile/{$image}";
        if(Storage::exists($path)){
            $response =storage_path().$path;
        } 
        else {$response="";}
        return $response;
     }
        
}
// //-------------------------------images-------------------------------------------

// Route::get('storage/upload/profile/{filename}', 
// function ($filename)
// {
//  $path = app_path('storage/upload/profile') . '/' . $filename;
//  $file = File::get($path);
//  $type = File::mimeType($path);
//  $response = Response::make($file, 200);
//  $response->header("Content-Type", $type);
//  return $response;
//  }

// )->name('retrieveimage');



