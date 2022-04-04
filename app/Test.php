<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'name', 'img','course_id'
    ];

    public function courses() {
          
        return $this->hasMany('App\Course');
    }

    public static function createQuestion($request) {

        
        $question = Question::create([
            'test_id' => $request->test_name,
            'name' => $request->question,
            'course_id' => $request->course_id,
        ]);
        $question->options()->createMany([
            ['answer' => $request->opt1, 'is_correct' => true],
            ['answer' => $request->opt2, 'is_correct' => false],
            ['answer' => $request->opt3, 'is_correct' => false],
            ['answer' => $request->opt4, 'is_correct' => false],
        ]);
    }
}
