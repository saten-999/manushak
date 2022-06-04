@extends('layouts.app')

@section('content')

<h2 class="text-white">Կիսամյակայիններ</h2>
<div class="container-fluid ">
    <div class="row">
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/6.pdf') }}" target="_blank">6-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/71.pdf') }}" target="_blank">7-րդ դասարան<br> Տարբերակ 1</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/71.pdf') }}" target="_blank">7-րդ դասարա<br> Տարբերակ 2</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/81.pdf') }}" target="_blank">8-րդ դասարան<br> Տարբերակ 1</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/82.pdf') }}" target="_blank">8-րդ դասարան <br> Տարբերակ 2</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/9.pdf') }}" target="_blank">9-րդ դասարան</a>
            </div>
        </div>
        <div class="col-3 dasht">
            <div>
                <a href="{{asset('file/kisamyak/10.pdf') }}" target="_blank">10-րդ դասարան</a>
            </div>
        </div>

    </div>
</div>

@endsection