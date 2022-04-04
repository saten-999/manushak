@extends('layouts.app')

@section('content')
    
<div class="container-fluid mt-5">
    <div class="row text-white">
        @foreach ($test as $item)
            <div class="col-2 category m-1">
                <a href="/test/{{$item->id}}" class="text-white h2 ">{{$item->name}}</a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection