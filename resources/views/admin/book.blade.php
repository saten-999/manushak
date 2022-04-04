@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#add_course" aria-expanded="false" aria-controls="collapseExample">
               Ավելացնել գիրք
            </button>
        </div>
        <div class="collapse mt-5 w-100" id="add_course">
            <div class="card card-body ">
                <form action="/admin/add-book" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Վերնագիր</label>
                        <input type="text"  required class="form-control" name="title" id="exampleFormControlInput1" placeholder="Վերնագիր">
                      </div>

                      <div class="form-group row">
                        <label for="exampleFormControlFile1">Ներմուծել գրքի նկարը </label>
                        <input type="file" required name="book-img" class="form-control-file" id="exampleFormControlFile1">
                      </div>

                    <div class="form-group row">
                      <label for="exampleFormControlFile1">Ներմուծել գիրքը </label>
                      <input type="file" required name="book" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3 float-right">Ավելացնել</button>

                  </form>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($books as $book)
            <div class="col-3 ">
                <div class="card mt-2" >
                    <div class="card-header">
                        {{$book->title}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <img src="{{asset("$book->img")}}" alt="">
                    </ul>
                  </div>
                
            </div>
        @endforeach
    </div>
</div>

  

@endsection