<?php
/*************************************************************************
	> File Name: FileUploadUtil.php
	> Author: liyb
	> Mail: winter_thinker@icloud.com
	> Created Time: 一  7/24 16:46:11 2023
 ************************************************************************/
namespace App\Lib;

use App\FileUpload;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class FileUploadUtil
{
    public static function uploadImg($image)
    {
        $currentDate = Carbon::now()->toDateString();
        $file_ext = $image->getClientOriginalExtension();
        $file_name  = 'file-' . $currentDate . '-' . uniqid() . '.' .$file_ext;
        $file_size = $image->getClientSize();
        $file_realpath=$image->getRealPath();

        if (!Storage::disk('public')->exists('files')) {
            Storage::disk('public')->makeDirectory('files');
        }
        $streamImage = Image::make($image)->stream();
        Storage::disk('public')->put('files/' . $file_name, $streamImage);

        $fileUpload = new FileUpload();
        $fileUpload->file_type = $image->getMimeType();
        $fileUpload->file_name = $file_name;
        $fileUpload->file_ext = $file_ext;
        $fileUpload->file_md5 = md5_file($file_realpath);
        $fileUpload->file_size = $file_size;
        $fileUpload->file_link = 'storage/files/'.$file_name;
        $fileUpload->created_at = now();
        $fileUpload->save();
        return $fileUpload;
    }

    public static function uploadFile($file)
    {
        $currentDate = Carbon::now()->toDateString();
        $file_ext = $file->getClientOriginalExtension();
        $file_name  = 'file-' . $currentDate . '-' . uniqid() . '.' .$file_ext;
        $file_size = $file->getClientSize();
        $file_realpath=$file->getRealPath();

        if (!Storage::disk('public')->exists('files')) {
            Storage::disk('public')->makeDirectory('files');
        }
        Storage::disk('public')->put('files/' . $file_name, file_get_contents($file));

        $fileUpload = new FileUpload();
        $fileUpload->file_type = $file->getMimeType();
        $fileUpload->file_name = $file_name;
        $fileUpload->file_ext = $file_ext;
        $fileUpload->file_md5 = md5_file($file_realpath);
        $fileUpload->file_size = $file_size;
        $fileUpload->file_link = 'storage/files/'.$file_name;
        $fileUpload->created_at = now();
        $fileUpload->save();
        return $fileUpload;
    }

}
