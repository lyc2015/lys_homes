<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_upload';
    protected $fillable = [
        'file_type',
        'file_name',
        'file_ext',
        'file_md5',
        'file_size',
        'file_link',
        'created_at',
        'updated_at'
    ];

}
