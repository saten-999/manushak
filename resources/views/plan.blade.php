@extends('layouts.app')

@section('content')

<h2 class="text-white">Թեմատիկ պլանավորում</h2>
<div class="container-fluid ">
    <div class="row">
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/dasaran/6.pdf') }}" target="_blank">6-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/dasaran/7.pdf') }}" target="_blank">7-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/dasaran/8.pdf') }}" target="_blank">8-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/dasaran/9.pdf') }}" target="_blank">9-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/dasaran/10.pdf') }}" target="_blank">10-րդ դասարան</a>
            </div>
        </div>

    </div>
</div>

@endsection