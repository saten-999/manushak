<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Question extends Model
{

    protected $fillable = [
        'test_id', 'name', 'course_id'
    ];

    public function options() {
          
        return $this->hasMany('App\Option');
    }
}
