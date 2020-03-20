<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * fileupload
     *
     * @param  mixed $file
     * @param  mixed $path_to_upload
     * 
     * @return string $fileName
     */
    protected function fileupload($file, $path_to_upload) :string {

        $fileName = $file->getClientOriginalName();

        if (file_exists(public_path($path_to_upload))) {

            $file->move(public_path($path_to_upload), $fileName);
        } else {

        try {
            mkdir(public_path($path_to_upload));
        } catch (\Throwable $th) {
            dd('wadawd');
        }    
            $file->move(public_path($path_to_upload), $fileName);
        }

        return $fileName;
    }
}
