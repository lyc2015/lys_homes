<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisclaimerZh extends Model
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
