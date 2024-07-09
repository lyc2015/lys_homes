<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';
    protected $fillable = [
        'type',
        'name',
        'intro',
        'requirement',
        'work_place',
        'work_time',
        'rest_time',
        'salary',
        'status',
        'show_rank',
        'created_at',
        'updated_at'
    ];

}
