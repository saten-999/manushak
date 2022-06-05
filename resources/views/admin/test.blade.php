@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            {{-- <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#add_course" aria-expanded="false" aria-controls="collapseExample">
                Ավելացնել Թեստեր
            </button> --}}
            
          

        </div>
        <div class="collapse mt-5 w-100" id="add_course">
            <div class="card card-body ">
                <form action="/admin/test" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Ընտրեք թեման</label>
                        <select class="custom-select custom-select-lg"  required name="test_name">
                          @foreach ($test_name as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option> 
                          @endforeach
                        </select>
                    </div>

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


        
    </div>
    <div class="row mt-5">

        @foreach ($test_name as $item)
           <div class="col-3 border p-2 m-1">
            {{$item->name}}
           </div>
        @endforeach
    </div>
</div>
    
@endsection