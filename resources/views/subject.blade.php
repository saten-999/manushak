@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5">
    <div class="row ">
        {{-- @foreach ($test as $item)
        
            <div class="col-3  m-1">  
                <a href="/course/{{$item->id}}" class=" h2 ">
                    <img src="{{asset("storage/".$item->img)}}" alt="" class="category">
                    <p class="text-center text-white text-decoration-none">{{$item->name}}</p>
                </a>
            </div>
        @endforeach
         --}}
         <div class="col-3  ">  
            <a href="/sub" class=" h2 ">
                <img src="images/1.jpg" alt="" class="category">
                <p class="text-center text-white text-decoration-none">Ինֆորմատիկա</p>
            </a>
        </div>
        <div class="col-3  ">  
            <a href="/course/" class=" h2 ">
                <img src="images/2.jpg" alt="" class="category">
                <p class="text-center text-white text-decoration-none">Հայոց Պատմություն</p>
            </a>
        </div>
        <div class="col-lg-3  ">  
            <a href="/course" class=" h2 ">
                <img src="images/3.jpg" alt="" class="category">
                <p class="text-center text-white text-decoration-none">Հանրահաշիվ</p>
            </a>
        </div>
        <div class="col-lg-3  ">  
            <a href="" class=" h2 ">
                <img src="images/4.jpg" alt="" class="category">
                <p class="text-center text-white text-decoration-none">Երկրաչափություն</p>
            </a>
        </div>
    </div>
</div>

@endsection