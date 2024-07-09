<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_info';
    protected $fillable = [
        'name',
        'content',
        'status',
        'created_at',
        'updated_at'
    ];

}
