@extends('layouts.app')

@section('content')
    
        
    <div class="container-fluid">
        <div class="row   d-flex justify-content-center align-item-center bg-white">
            <h1 class=" text-danger text-center mb-5">{{$help->title}}</h1>
            
            {!! $help->article !!}
        </div>
    </div>
    
@endsection