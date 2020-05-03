@extends('master')
@section('content')
<section class="awe-parallax">
    <style>
        .col-lg-12{
            margin-bottom: 3px;
        }
        input{
            width: 100%;
        }
    </style>
    <div class="container" style="margin:30px 0px 100px 0px; text-align:center;">
        <div class="col-lg-5" style="background-color:#eee; padding:40px 0px; border-radius:5px; display:inline-block;">
            <h5 style="text-align:center;">Admin Login</h5>
            <form action="/admin/login" method="post">
                @csrf
                <div class="col-lg-12">
                    <input type="text" name="username" id="username">
                </div>
                <div class="col-lg-12">
                    <input type="password" name="password" id="password">
                </div>
                <div class="col-lg-12">
                    <input type="submit" class="awe-btn" name="submit" value="Login">
                </div>
                
            </form>
        </div>
    </div>
</section>
@endsection