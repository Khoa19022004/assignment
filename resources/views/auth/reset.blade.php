@extends('form.form')
@section('title')
    Đặt lại mật khẩu
@endsection
@section('content')
<div class="wrapper">
    <!-- Login Section Start -->
    <div class="login--section pd--30-0 bg--overlay" id="login-section">
        <div class="container">
            <!-- Login Form Start -->
            <div class="login--form">
                <div class="title">
                    <h1 class="h1">Đặt lại mật khẩu</h1>
                </div>

                <form action="{{route('processPass')}}" data-form="validate" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <input type="hidden" name="id_user" value="{{$id_user}}" >
                    <div class="form-group">
                        <label>
                            <span>Mật khẩu mới</span>
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
                    @if (session('success'))
                        <div>{{session('success')}}</div>
                    @endif
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Đặt lại</button>
                </form>
            </div>
            <!-- Login Form End -->
        </div>
    </div>
    <!-- Login Section End -->
</div>
@endsection
