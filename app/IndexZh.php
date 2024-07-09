<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexZh extends Model
{
    protected $table = 'company_info_zh';
    protected $fillable = [
        'name',
        'content',
        'status',
        'created_at',
        'updated_at'
    ];

}
