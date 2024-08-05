@extends('layouts.app')
@section('title')
    Thông tin người dùng
@endsection

{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

{{-- <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> --}}

@section('content')
    
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
            <div class="text-center">
                <img src="assets/img/{{$user->image}}" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
            </div></hr><br>
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            </ul>    
            <div class="tab-content p-3">
                <div class="tab-pane active" id="home">
                <hr>
                <form class="form" action="" method="post" enctype="multipart/form-data" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Họ và tên</h4></label>
                              <input type="text" class="form-control" value="{{$user->name}}" name="name"  placeholder="first name">
                          </div>
                      </div> 
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Giới tính</h4></label>
                             <select name="sex" id="">
                                @foreach ($sexs as $sex)
                                    @if ($user->sex==$sex)
                                        <option value="{{$user->sex}}" selected>{{$user->sex}}</option>
                                    @else    
                                        <option value="{{$sex}}">{{$sex}}</option>
                                    @endif                                    
                                @endforeach
                               
                             </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>UserName</h4></label>
                              <input type="text" value="{{$user->username}}" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" value="{{$user->password}}" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12" style="margin-bottom: 30px">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
                </div> 
            </div><!--/tab-content-->
        </div><!--/col-9-->
    </div><!--/row-->
    <script>                                   
    $(document).ready(function() {

    
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    
        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });
    </script>
</div>
@endsection