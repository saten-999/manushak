@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="row ">
        @foreach ($test as $item)
        
            <div class="col-3  mt-1">
                
                <a href="/course/{{$item->id}}" class=" h2 ">
                    {{-- <img src="{{asset("storage/".$item->img)}}" alt="" class="category"> --}}
                    <img src="/{{$item->img}}" alt="" class="category">
                    <p class="text-center text-white text-decoration-none">{{$item->name}}</p>
                </a>
            </div>
        @endforeach
        
    </div>
</div>

@endsection