<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Philosophy extends Model
{
    protected $table = 'company_info';
    protected $fillable = [
        'name',
        'content',
        'status',
        'created_at',
        'updated_at'
    ];

}
