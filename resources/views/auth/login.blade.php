@extends('master')
@section('content')
<section class="awe-parallax login-page-demo">
    <div class="awe-overlay"></div>
    <div class="container">
        <div class="login-register-page__content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="content-title">
                <span>Welcome back</span>
                <h2>EXPLORER!</h2>
            </div>
            <form action="/login" method="POST">
                <div class="form-item">
                    <label>Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form-item">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <a href="#" class="forgot-password">Forgot Password</a>
                <div class="form-actions">
                    <input type="submit" name="login" value="Log In">
                </div>
                @csrf
            </form>
            <div class="login-register-link">
                Dont have account yet? <a href="/register">Register HERE</a>
            </div>
        </div>
    </div>
</section>
@endsection