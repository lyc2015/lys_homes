<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = 'homepage';
    protected $fillable = [
        'bk_image',
        'news_ids',
        'status',
        'created_at',
        'updated_at'
    ];

}
