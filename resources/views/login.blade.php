@extends('form.form')
@section('title')
    Đăng Nhập
@endsection
@section('content')
    
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Login Section Start -->
    <div class="login--section pd--100-0 bg--overlay" data-bg-img="assets/img/background-login.jpg">
        <div class="container">
            <!-- Login Form Start -->
            <div class="login--form">
                <div class="title">
                    <h1 class="h1">Login</h1>
                    <p>Login into account by fillup the below form</p>
                </div>

                <form action="{{route('auth.login')}}" data-form="validate" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>
                            <span>Username or Email Address</span>
                            <input type="text" name="login" class="form-control" >
                        </label>
                        @if ($errors->has('login'))
                            <div class="alert alert-danger">
                                {{ $errors->first('login') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" class="form-control">
                        </label>
                    </div>
                    @if ($errors->has('success'))
                        <div class="alert alert-danger">
                            {{ $errors->first('success') }}
                        </div>
                    @endif
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                            <span>Remember me</span>
                        </label>
                    </div>
                    @if ($errors->has('checkAdmin'))
                        <div>{{$errors->first('checkAdmin')}}</div>
                    @endif
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Log in</button>

                    <p class="help-block clearfix">
                        <a href="{{route('forget')}}" class="btn-link pull-left">Quên mật khẩu?</a>
                        <a href="{{route('register')}}" class="btn-link pull-right">Tạo mới</a>
                    </p>
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
    <!-- Login Section End -->
</div>
<!-- Wrapper End -->
@endsection

   