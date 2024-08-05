@extends('admin.layouts.app')

@section('title')
    Cập nhật người dùng
@endsection

@section('css')
<style>
  .Choicefile {
    display: block;
    background: #14142B;
    border: 1px solid #fff;
    color: #fff;
    width: 150px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    padding: 5px 0px;
    border-radius: 5px;
    font-weight: 500;
    align-items: center;
    justify-content: center;
  }

  .Choicefile:hover {
    text-decoration: none;
    color: white;
  }

  #uploadfile,
  .removeimg {
    /* display: none; */
  }

  #thumbbox {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
  }

  .removeimg {
    height: 25px;
    position: absolute;
    background-repeat: no-repeat;
    top: 5px;
    left: 5px;
    background-size: 25px;
    width: 25px;
    /* border: 3px solid red; */
    border-radius: 50%;

  }

  .removeimg::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    content: '';
    border: 1px solid red;
    background: red;
    text-align: center;
    display: block;
    margin-top: 11px;
    transform: rotate(45deg);
  }

  .removeimg::after {
    /* color: #FFF; */
    /* background-color: #DC403B; */
    content: '';
    background: red;
    border: 1px solid red;
    text-align: center;
    display: block;
    transform: rotate(-45deg);
    margin-top: -2px;
  }
</style>
@endsection

@section('content')
<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Danh sách người dùng</li>
    <li class="breadcrumb-item"><a href="#">Cập nhật</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">

      <h3 class="tile-title">Cập nhật</h3>
      <div class="tile-body">
        <form class="row" action="{{route('admin.Users.update',$user->id)}}" enctype="multipart/form-data" method="POST" >
          @csrf
          <div class="form-group col-md-4">
            <label class="control-label">Họ và tên</label>
            <input class="form-control" type="text" name="name" value="{{$user->name}}">
          </div>
          
          <div class="form-group col-md-4">
            <label class="control-label">Vai trò</label>
            <select class="form-control" id="exampleSelect2" name="role" >
              @foreach ($roles as $role)
                @if ($role==$user->role)
                  <option value="{{$user->role}}" >{{$user->role}}</option>
                @else
                    <option value="{{$role}}">{{$role}}</option>
                @endif  
              @endforeach
            </select>
            @if ($errors->has('role'))
                <div>{{$errors->first('role')}}</div>
            @endif
          </div>
          <div class="form-group col-md-12 row">
            <div id="myfileupload" class="col-3" >
              <label class="control-label">Ảnh </label>
              <input type="file" id="uploadfile" style="display: none" name="image" />
              <button type="button" class="bx Choicefile bx-upload"  onclick="document.getElementById('uploadfile').click();"></button>
            </div>
            <div class="col-4"><img src="assets/img/{{$user->image}}" class="w-90" alt=""></div>
          </div>
          <div  class="form-group col-md-12">
            <button class="btn btn-save" type="submit">Tạo mới</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
   

