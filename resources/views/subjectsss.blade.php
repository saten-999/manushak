@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="row ">
        @foreach ($sub as $item)
        
            <div class="col-3  m-1 book ">  
                <a href="/{{$item->book}}" target="_blank" class="h2"> 
                    <p class="text-center tex-twhite text-decoration-none">Ինֆորմատիկա </p>
                    <p class="text-center tex-twhite text-decoration-none">{{$item->class}}-րդ Դասարան </p>
                </a>
            </div>
        @endforeach
        

    </div>
</div>

@endsection