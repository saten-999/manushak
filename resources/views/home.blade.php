@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="main">
    <div class="row">
        <div class="col-4 text-center">
            <h3>Կրթություն</h3>
            <div class="hovereffect">
                <img src="images/krt.jpg" class="img-fluid" alt="Responsive image" id="sant">
            </div>
        </div>
        <div class="col-4 text-center">
            <h3>Արվեստ</h3>
            <div class="hovereffect">
                <img src="images/arv.jpg" class="img-fluid" alt="Responsive image" id="sant">
           </div>
        </div>
        <div class="col-4 text-center">
            <h3>Գիտելիք</h3>
            <div class="hovereffect">
                <img src="images/git.jpg" class="img-fluid" alt="Responsive image" id="sant">
           </div>
           
        </div>
    </div>


    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</div>
@endsection
