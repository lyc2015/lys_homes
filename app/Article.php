<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = [
        'type',
        'cover_title',
        'cover_title_en',
        'cover_image',
        'cover_intro',
        'title',
        'title_en',
        'content',
        'status',
        'show_rank',
        'created_at',
        'updated_at'
    ];

}
