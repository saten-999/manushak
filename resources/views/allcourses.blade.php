@extends('layouts.app')

@section('content')

    <div class="container p-5 mt-4 bg-light">
        <div class="row">
            <div class="col-12 px-5 mt-2 " >
                <h1>{{$courses->title}}</h1>
                <div class="row mt-5 h5 textt">
                    {{$courses->text}}
                </div>            
            </div>
    </div>

    @foreach ($test as $k => $item)
    <div class="row  py-2 h5 mt-5 border ">
        <div class="col-12">
            {{$item['name']}}?
            <br>
            <div class="ml-5 ">
            <?php shuffle($item['options']) ?>
                @foreach ($item['options'] as $key =>  $option)
                <div id="opt{{$k }}{{$key}}" class="mt-2"> 
                    @if (!$option['is_correct'])
                        <?php $option['is_correct']=0 ?>
                    @endif
                    <input type="radio"class="mr-2" onClick="sel({{$option['is_correct']}},{{$key}},{{$k }})" name="opt{{$k }}"> {{$option['answer']}}
                </div>
                @endforeach
            </div>
            
        </div>
        </div>
    @endforeach

    <div>
        <button class="btn btn-success float-right">
            <a href="/course/{{$courses->test_id}}" class="text-white text-decoration-none p-3 mt-3">Հաջորդը</a>
        </button>

    </div>
    </div>

   

    
@endsection