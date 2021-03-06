<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use Storage;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subject',[
            // 'susbject' => Subject::all()
        ]);
    }

    public function subject()
    {
        return view('subject');
    }

    public function subjectt()
    {
        return view('subjectt');
    }

    public function adminIndex(Request $request)
    {
        // $book = Storage::putFile('book',    $request->file('book'));

        // Subject::create([
        //     'class' => $request->title, 
        //     'book'  => $book,
        // ]);

        Subject::create([
            'class' => 7, 
            'book'  => 'book/7hanr․pdf',
        ]);


        return redirect('/admin/subject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        return view('subjectsss',[
            'sub' => Subject::orderBy('class','ASC')->get()
        ]);
    }

    public function infoo()
    {
        return view('subinfo',[
            'sub' => Subject::orderBy('class','ASC')->get()
        ]);
    }

    public function hanrahashiv()
    {
        return view('hanrahashiv',[
            'sub' => Subject::orderBy('class','ASC')->get()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function plan()
    {
        return view('plan',[
            // 'sub' => Subject::orderBy('class','ASC')->get()
        ]);
    }

    public function kisamyak()
    {
        return view('kisamyak',[
            // 'sub' => Subject::orderBy('class','ASC')->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
