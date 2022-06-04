@extends('layouts.app')

@section('content')

    <div class="w-100">
        <iframe src="https://drive.google.com/file/d/1YmcYQAh4aWR4nN2QlF7xYNG-SDa8rM9c/view" frameborder="0"></iframe>
    </div>


    <div class="container-fluid px-5 ">
        <div class="row">
            <div class="col-12 px-5 mt-2">

                <div class="row mt-5">
                    @foreach ($courses as $course)
                        <div class="col-3 ">
                            <div class="card mt-2 ca"  >
                                <div class="card-header font-weight-bold ">
                                    {{$course->title}}
                                </div>
                                <ul class="list-group list-group-flush ">
                                    <a href="/course/{{$test->id}}/{{$course->id}}" class="float-right ">
                                        <img src="/{{$test->img}}" class="w-100 maincourse" >
                                    </a>
                                </ul>
                              
                              </div>
                            
                        </div>
                    @endforeach
                    {{-- <div class="col-3 ca">
                        <div class="card mt-2 " >
                            <div class="card-header font-weight-bold h5">
                                Վերջնական թեստ
                            </div>
                            <ul class="list-group list-group-flush ca">
                                <a href="/test/{{$test->id}}" class="float-right ">
                                    <img src="/images/quiz.jpeg" class="w-100 maincourse" >
                                </a>
                            </ul>
                          
                          </div>
                        
                    </div> --}}
                </div>            
            </div>
        </div>
    </div>
@endsection