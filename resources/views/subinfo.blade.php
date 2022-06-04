@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-3 dasht">
                <div>
                    <a href="/plan">Թեմատիկ պլանավորում</a>
                </div>
            </div>
            <div class="col-3 dasht">
                <div>
                    <a href="{{asset('file/Դասիպլան.docx') }}">Դասի պլան</a>
                </div>
            </div>
            <div class="col-3 dasht">
                <div>
                    <a href="{{asset('file/Հաշվետվություն.docx') }}">Հաշվետվության ձև</a>
                </div>
            </div>
            <div class="col-3 dasht">
                <div>
                    <a href="{{asset('file/Դասալսմանբլանկ.docx') }}">Դասալսման բլանկ</a>
                </div>
            </div>
            <div class="col-3 dasht">
                <div>
                    <a href="/kisamyak">Կիսամյակայիններ</a>
                </div>
            </div>

        </div>
    </div>
@endsection