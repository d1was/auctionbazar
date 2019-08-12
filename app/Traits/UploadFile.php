<?php


namespace App\Traits;


use Illuminate\Http\UploadedFile;

trait UploadFile
{
    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);
        $file = $uploadedFile->storeAs($folder, $name , $disk );
        return $file;
    }
}
