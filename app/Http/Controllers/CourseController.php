<?php

namespace App\Http\Controllers;

use App\Course;
use App\Test;
use App\Question;
use Illuminate\Http\Request;
use Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('course',[
            'courses' => Course::all(),
            'test' => Test::all(),
        ]);
    }

    public function course($id)
    {
        // echo "<pre>";
        // var_dump(); die;
        return view('maincourse',[
            'courses' => Test::find($id)->courses,
            'test' => Test::find($id)
        ]);
    }

    public function maincourse($test, $course)
    {
        $t =Test::find($test)->courses()->where('courses.id',$course)->first();
        if(!empty($t)){
            return view('allcourses',[
                'courses' => $t ,
                'test'    => Question::where('test_id',$test)->with('options')->where('course_id',$course)->get()->toArray()
            ]);
        }
        // echo "<pre>";
        // var_dump(Test::find($test)->courses()->where('courses.id',$course)->get()); die;
        return redirect('course/'.$test);
    }

    public function adminIndex()
    {
        return view('admin.course',[
            'courses' => Course::all(),
            'test_name' => Test::all(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create([
                    'title' => $request->title, 
                    'text'  => $request->text,
                    'test_id'  => $request->test_name
                ]);

        $request->course_id = $course->id;
        Test::createQuestion($request);

        return redirect('/admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editcourse',[
            'course' => Course::find($id),
            'test_name' => Test::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        Course::find($request->id)
                ->update([
                    'title' => $request->title, 
                    'text'  => $request->text,
                    'test_id'  => $request->test_name
                ]);
        return redirect('/admin/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        Course::destroy($request->id);
        
        return redirect('/admin/course');
    }




    public function certificate(){
        
        return view('certificate');
    }
}
