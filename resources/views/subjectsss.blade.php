@extends('layouts.app')

@section('content')

<div class="container-fluid ">
    <div class="row ">
        @foreach ($sub as $item)
            @if ($item->id<6)
            <div class="col-3   ">  
                <div class="m-1 book">
                    <a href="/{{$item->book}}" target="_blank" class="h2"> 
                        <p class="text-center tex-twhite text-decoration-none">Ինֆորմատիկա </p>
                        <p class="text-center tex-twhite text-decoration-none">{{$item->class}}-րդ Դասարան </p>
                    </a>
                </div>
                
            </div>
            @endif
            
        @endforeach
        

    </div>
</div>

@endsection