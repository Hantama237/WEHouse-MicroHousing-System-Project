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
        <div class="col-lg-3"></div>
        <div class="col-lg-9" style="background-color:#eee; padding:40px 0px; border-radius:5px; display:inline-block;">
            <h5 style="text-align:center;">Register New Housing Officer</h5>
            <form autocomplete="off" aria-autocomplete="none" action="/admin/register/housing-officer" method="post">
                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                @csrf
                <div class="col-lg-12">
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name">
                </div>
                <div class="col-lg-12">
                    <input autocomplete="false" type="text" name="email" id="email" placeholder="E-mail">
                </div>
                <div class="col-lg-12">
                    <input autocomplete="false" type="text" name="username" id="username" placeholder="Username">
                </div>
                <div class="col-lg-12">
                    <input type="text" name="staff_id" id="staff_id" placeholder="Staff ID">
                </div>
                <div class="col-lg-12">
                    <input autocomplete="false" type="password" name="password" id="password" placeholder="password">
                </div>
                <div class="col-lg-12">
                    <input type="password" name="password-confirm" id="password-confirm" placeholder="Password Confirmation">
                </div>
                <div class="col-lg-12">
                    <input type="submit" class="awe-btn" name="submit" value="Register">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection