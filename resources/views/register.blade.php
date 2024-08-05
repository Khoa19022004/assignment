@extends('form.form')
@section('title')
    Đăng ký
@endsection
@section('content')
    
<div class="wrapper">
    <!-- Login Section Start -->
    <div class="login--section pd--30-0 bg--overlay" id="login-section">
        <div class="container">
            <!-- Login Form Start -->
            <div class="login--form">
                <div class="title">
                    <h1 class="h1">Đăng kí</h1>
                </div>

                <form action="{{route('submit.register')}}" data-form="validate" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>
                            <span>Tên đăng nhập</span>
                            <input type="text" name="username" class="form-control" >
                        </label>
                        @if ($errors->has('username'))
                            <div>{{$errors->first('username')}}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>
                            <span>Địa chỉ Email</span>
                            <input type="email" name="email" class="form-control" >
                        </label>
                        @if ($errors->has('email'))
                            <div>{{$errors->first('email')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>
                            <span>Mật khẩu</span>
                            <input type="password" name="password" class="form-control" >
                        </label>
                        @if ($errors->has('password'))
                            <div>{{$errors->first('password')}}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>
                            <span>Nhập lại mật khẩu</span>
                            <input type="password" name="password_confirmation" class="form-control" >
                        </label>
                        @if ($errors->has('password_confirmation'))
                            <div>{{$errors->first('password_confirmation')}}</div>
                        @endif
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="rememberme">
                            <span>Remember me</span>
                        </label>
                    </div>
                    @if (session('success'))
                        <div>{{session('success')}}</div>
                    @endif
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Đăng kí</button>

                    <p class="help-block clearfix">
                        <a href="{{route('forget')}}" class="btn-link pull-left">Quên mật khẩu?</a>
                        <a href="{{route('login')}}" class="btn-link pull-right">Đăng nhập</a>
                    </p>
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
    <!-- Login Section End -->
</div>
@endsection
