@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <button class="btn btn-warning " type="button" data-toggle="collapse" data-target="#add_test" aria-expanded="false" aria-controls="collapseExample">
                Ավելացնել Բաժին
            </button>
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#add_course" aria-expanded="false" aria-controls="collapseExample">
                Ավելացնել Նյութը
            </button>
        </div>
        <div class="collapse mt-5 w-100" id="add_course">
            <div class="card card-body ">
                <form action="/admin/course" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Ընտրեք բաժին</label>
                        <select class="custom-select custom-select-lg"  required name="test_name">
                          @foreach ($test_name as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option> 
                          @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Վերնագիր</label>
                        <input type="text"  required class="form-control" name="title" id="exampleFormControlInput1" placeholder="Վերնագիր">
                      </div>

                      <div class="form-group row">
                        <label for="exampleFormControlTextarea1">Նյութը</label>
                        <textarea class="ckeditor form-control" name="text"></textarea> 
                      </div>

                    <br>

                    <h2 class="text-center">Ավելացնել հարցեր</h2>

                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Հարց</label>
                        <input type="text"  required class="form-control" name="question" id="exampleFormControlInput1" placeholder="Հարց">
                    </div>

                    <div class="form-group row mt-5">
                        <label for="exampleFormControlInput1">Տարբերակներ</label>
                        <input type="text"  required class="form-control mt-2 border-success"name="opt1" id="exampleFormControlInput1" placeholder="Տարբերակ 1">
                        <input type="text"  required class="form-control mt-2 border-danger" name="opt2" id="exampleFormControlInput1" placeholder="Տարբերակ 2">
                        <input type="text"  required class="form-control mt-2 border-danger" name="opt3" id="exampleFormControlInput1" placeholder="Տարբերակ 3">
                        <input type="text"  required class="form-control mt-2 border-danger" name="opt4" id="exampleFormControlInput1" placeholder="Տարբերակ 4">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 float-right">Ավելացնել</button>

                  </form>
            </div>
        </div>

        <div class="collapse mt-5 w-100" id="add_test">
            <div class="card card-body ">
                <form action="/admin/test-name" method="POST" enctype="multipart/form-data">
                    @csrf                      
                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Դասընթացի անուն</label>
                        <input type="text"  required class="form-control" name="test_name" id="exampleFormControlInput1" placeholder="Թեմա">
                    </div>

                    <div class="form-group row">
                        <label for="exampleFormControlFile1">Դասընթացի նկար</label>
                        <input type="file" required name="img" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                    <button type="submit" class="btn btn-primary mt-3 float-right">Ավելացնել</button>

                  </form>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($courses as $course)
            <div class="col-lg-3 ">
                <div class="card mt-2" >
                    <div class="card-header font-weight-bold h4">
                        {{$course->title}}
                    </div>
                    <ul class="list-group list-group-flush p-3">
                        {{-- {{substr($course->text, 0, 400)}}  --}}
                    </ul>
                    <div>
                        <a href="/admin/course/{{$course->id}}" class="float-left py-2 mr-2">Խմբագրել</a>
                        <a href="/admin/course/delete/{{$course->id}}" class="float-right py-2 mr-2 text-danger">Ջնջել</a>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>
</div>

  

@endsection