@extends('layouts.app')

@section('content')
    
<div class="container-fluid mt-5 bg-light">
    <div class="row">
        <div class="col-12 text-center">
            <h1>{{$test_name->name}}</h1>
        </div>
    </div>
    @foreach ($test as $k => $item)
    <div class="row  py-2">
        <div class="col-2"></div>
        <div class="col-10">
            {{$item['name']}}?
            <br>
            <div class="ml-5">
               <?php shuffle($item['options']) ?>
                @foreach ($item['options'] as $key =>  $option)
                <div id="opt{{$k }}{{$key}}"> 
                    @if (!$option['is_correct'])
                        <?php $option['is_correct']=0 ?>
                    @endif
                    <input type="radio" onClick="sel({{$option['is_correct']}},{{$key}},{{$k }})" name="opt{{$k }}">{{$option['answer']}}
                 </div>
                @endforeach
            </div>
            
        </div>
        <div class="col-2"></div>
    </div>
    @endforeach
    
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
           <button class=" btn btn-success p-2" onclick="finish()">Ավարտել</button>
        </div>
        <div class="col-2"></div>
    </div>
        
        
    
</div>
@endsection