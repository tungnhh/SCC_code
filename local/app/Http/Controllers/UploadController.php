<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use File;

use App\Http\Requests;

use Chumper\Zipper\Zipper;



class UploadController extends Controller
{
    public function uploadFromComputer(Request $request)
    {
        $files = $request->file('file');

        if (!empty($files)):

            foreach ($files as $file):
            	$zipper = new Zipper;
            	$filename = $file->getClientOriginalName();

            	// Get id from request
            	// now, id is fixed
            	$userName = '/thanhnn';
            	$className = '/js1002';
            	$exersiceName = '/assign/';
            	$studentInfor = explode(".", $filename, 2)[0];
            	$contentFile = '';
            	$language = '.java';

            	
            	$storage_path = storage_path();

            	$storage_path_to_folder = $storage_path.$userName.$className.$exersiceName.$studentInfor;
            	$storage_path_to_file = $storage_path.$userName.$className.$exersiceName.$studentInfor.'/'.$file->getClientOriginalName();
            	$storage_path_to_file_java = $storage_path.$userName.$className.$exersiceName.$studentInfor.'/'.$studentInfor.$language;

            	$file->move($storage_path_to_folder, $file->getClientOriginalName());

            	$javaFiles = $zipper->make($storage_path_to_file)->listFiles('/\.java$/i');
            	
            	foreach ($javaFiles as $filePath) {
            	   $temp = $zipper->make($storage_path_to_file)->getFileContent($filePath);
            	   $contentFile = $contentFile.$temp;
            	}

            	File::put($storage_path_to_file_java, $contentFile);
            	

            	$zipper->close();

            	unlink($storage_path_to_file);

            endforeach;

        endif;


    }

    public function uploadFromGoogleDriver(Request $request){

    }
}
