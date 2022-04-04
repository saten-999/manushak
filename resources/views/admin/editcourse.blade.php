@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-body mt-5">
                    <form action="/admin/course/{{$course->id}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')

                        <div class="form-group row">
                            <label for="exampleFormControlInput1">Ընտրեք թեման</label>
                            <select class="custom-select custom-select-lg"  required name="test_name">
                              @foreach ($test_name as $item)
                                <option value="{{$item->id}}"
                                    @if ($item->id == $course->test_id)
                                        selected
                                    @endif
                                    >
                                    {{$item->name}}
                                </option> 
                              @endforeach
                            </select>
                        </div>

                        <div class="form-group row">
                            <label for="exampleFormControlInput1">Վերնագիր</label>
                            <input type="text"  required class="form-control" name="title" id="exampleFormControlInput1" placeholder="Վերնագիր" value="{{$course->title}}">
                          </div>
            
                          <div class="form-group row">
                            <label for="exampleFormControlTextarea1">Նյութը</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="text" >{{$course->text}}</textarea>
                          </div>
            
                        <button type="submit" class="btn btn-primary mt-3 float-right">Թարմացնել</button>
            
                      </form>
                </div>
            </div>
        </div>
    </div>

@endsection