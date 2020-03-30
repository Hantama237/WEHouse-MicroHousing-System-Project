@extends('master')
@section('content')
<section class="awe-parallax register-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="login-register-page__content">
            <div class="content-title">
                <span>Find a affordable house</span>
                <h2>JOIN US !</h2>
            </div>
            <form action="/register" method="POST">
                @csrf
                <div class="form-item">
                    <label>Full Name</label>
                    <input type="text" name="fullname" value="{{old("fullname")}}">
                </div>
                <div class="form-item">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old("email")}}">
                </div>
                <div class="form-item">
                    <label>Monthly Income (in $)</label>
                    <input type="number" name="monthlyincome" value="{{old("monthlyincome")}}">
                </div>
                <div class="form-item">
                    <label>Password</label>
                    <input type="password" name="password" value="{{old("password")}}">
                </div>
                <div class="form-item">
                    <label>Confirm password</label>
                    <input type="password" name="password_confirmation" value="{{old("confirmpassword")}}">
                </div>
                <a href="#" class="terms-conditions">By registering, you accept terms &amp; conditions</a>
                <div class="form-actions">
                    <input type="submit" value="Register">
                </div>
            </form>
            <div class="login-register-link">
                Already have Account? <a href="/login">Log in HERE</a>
            </div>
        </div>
    </div>
</section>
@endsection