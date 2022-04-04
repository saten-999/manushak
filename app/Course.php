<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'text','test_id'
    ];


    public function test()
    {
        return $this->belongsTo('App\Test');
    }

}
