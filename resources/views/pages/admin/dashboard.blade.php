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
    <div class="container" style="margin:30px 0px 100px 0px; color:black;">
        <div class="col-lg-3"></div>
        <div class="col-lg-9">
            <h3>Admin Menu</h3>
        - <a href="/admin/register/housing-officer">Register Housing Officer</a> <br>
        - <a href="/logout">Log Out</a>
        </div>
    </div>
</section>
@endsection