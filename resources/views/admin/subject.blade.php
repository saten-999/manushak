@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#add_course" aria-expanded="false" aria-controls="collapseExample">
               Առարկան
            </button>
        </div>
        <div class="collapse mt-5 w-100" id="add_course">
            <div class="card card-body ">
                <form action="/admin/subject" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Ընտրեք թեման</label>
                        <select class="custom-select custom-select-lg"   name="test_name">
                            <option value="">Ինֆորմատիկա</option> 
                            <option value="">Հանրահաշիվ</option> 
                            <option value="">Երկրաչափություն</option> 
                            <option value="">Հայոց Պատմությում</option> 
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlInput1">Դասարան</label>
                        <input type="text"  required class="form-control" name="title" id="exampleFormControlInput1" placeholder="Դասարան">
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

</div>

  

@endsection