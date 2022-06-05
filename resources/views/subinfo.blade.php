@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-3 dasht">
                <div>
                    <a href="/plan">Թեմատիկ պլանավորում</a>
                </div>
            </div>
            <div class="col-lg-3 dasht">
                <div>
                    <a href="{{asset('file/Դասիպլան.pdf') }}">Դասի պլան</a>
                </div>
            </div>
            <div class="col-lg-3 dasht">
                <div>
                    <a href="{{asset('file/Հաշվետվություն.pdf') }}">Հաշվետվության ձև</a>
                </div>
            </div>
            <div class="col-lg-3 dasht">
                <div>
                    <a href="{{asset('file/Դասալսմանբլանկ.pdf') }}">Դասալսման բլանկ</a>
                </div>
            </div>
            <div class="col-lg-3 dasht">
                <div>
                    <a href="/kisamyak">Կիսամյակայիններ</a>
                </div>
            </div>

        </div>
    </div>
@endsection