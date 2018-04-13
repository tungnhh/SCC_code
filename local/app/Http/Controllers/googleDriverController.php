<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
class googleDriverController extends Controller
{
    /**
     * @param Request $request
     */
    public function uploadFromDrive(Request $request){
    $file_id = '19MZ9U4g1CgAFDGLzDqVs9YepBf4EZIFg';
    $service = buildService();
    $file = $service->files->get($file_id);
    Storage::put('name.zip', downloadFile($service,$file));

}


}
