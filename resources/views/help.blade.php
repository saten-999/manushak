@extends('layouts.app')

@section('content')
    


    @if (!empty($help))
        
    <div class="container-fluid">
        <div class="row">
            @foreach ($help as $item)
                <div class="col-3 border ">
                    <h2 class="text-white mb-5">{{$item->title}}</h2>
                    
                        {!! substr($item->article,0,700) !!} 
                        <a href="/help/{{$item->id}}" class="text-white">Կարդալ ավելին </a>
                    
                </div>
            @endforeach
            
        </div>
    </div>
    @endif
    
@endsection