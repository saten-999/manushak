@extends('layouts.app')


@section('content')
<div id="fh5co-contact" >
    <div class="container bg-light">
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box">   </div>
            <div class="col-md-6 animate-box">
                <h3 class="py-2">Կապվեք մեզ հետ</h3>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Անուն">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Ազգանուն">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="email">Email</label> -->
                            <input type="text" id="email" class="form-control" placeholder="Էլ փոստ">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" id="subject" class="form-control" placeholder="Առաջարկվող թեմաներ">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Առաջարկ"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ուղարկել"  id="send" class="btn btn-primary">
                    </div>

                </form>		
            </div>
        </div>
        
    </div>
</div>

    
@endsection