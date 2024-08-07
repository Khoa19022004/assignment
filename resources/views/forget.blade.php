@extends('form.form')
@section('title')
    Quên mật khẩu
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
                    <h1 class="h1">Quên mật khẩu</h1>
                </div>

                <form action="{{route('submit.forget')}}" data-form="validate" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>
                            <span>Địa chỉ Email</span>
                            <input type="email" name="email" class="form-control">
                        </label>
                        @if ($errors->has('email'))
                            <div>{{$errors->first('email')}}</div>
                        @endif
                        @if (session('message'))
                            <div>{{session('mesage')}}</div>
                        @endif
                    </div>

      
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Gửi</button>

                    <p class="help-block clearfix">
                        <a href="{{route('login')}}" class="btn-link pull-left">Đăng nhập</a>
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

   