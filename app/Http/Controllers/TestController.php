<?php

namespace App\Http\Controllers;

use App\Test;
use App\Question;
use Illuminate\Http\Request;
use Storage; 
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test',[
            'test' => Test::all(),
        ]);
    }

    public function adminIndex()
    {
        return view('admin.test',[
            'test_name' => Test::all(),
            // 'tests'     => Question::all()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::createQuestion($request);

        return redirect('/admin/test');
    }


    public function store_test(Request $request)
    {
        $img = Storage::putFile('course-img', $request->file('img'));

        Test::create([
            'name' => $request->test_name,
            'img' => 'course-img/smm.jpg'
        ]);

        return redirect('/admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        // echo "<pre>";
        // var_dump(Question::where('test_id',$id)->with('options')->get());die;
        return view('maintest',[

            'test'      => Question::where('test_id',$id)->with('options')->whereNull('course_id')->get()->toArray(),
            'test_name' => Test::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
