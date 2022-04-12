@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">

        <div class=" mt-5 w-100" id="add_course">
            <div class="card card-body ">
                <form action="/admin/help" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Վերնագիր</label>
                        <input type="text"  required class="form-control" name="title" id="exampleFormControlInput1" placeholder="Վերնագիր">
                      </div>

                      <div class="form-group row">
                        <label for="exampleFormControlTextarea1">Նյութը</label>
                        <textarea class="ckeditor form-control w-100" name="text"></textarea> 
                      </div>

                    <button type="submit" class="btn btn-primary mt-3 float-right">Ավելացնել</button>

                  </form>
            </div>
        </div>

    </div>

</div>

  

@endsection