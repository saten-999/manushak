<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    protected $fillable = [
        'question_id', 'answer','is_correct'
    ];

    public function test()
    {
        return $this->belongsTo('App\Question');
    }
}
