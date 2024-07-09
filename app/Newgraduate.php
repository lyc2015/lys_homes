<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newgraduate extends Model
{
    protected $table = 'newgraduate';
    protected $fillable = [
        'type',
        'start_salary',
        'trial_period',
        'hands_on',
        'salary_incr',
        'bonus',
        'work_place',
        'work_time',
        'rest_time',
        'welfare',
        'training_system',
        'status',
        'show_rank',
        'created_at',
        'updated_at'
    ];

}
