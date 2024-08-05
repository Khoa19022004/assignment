@extends('admin.layouts.app')
@section('title')
    Cập nhật tin tức
@endsection
@section('css')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Cập nhật tin</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
  
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm nhap-tu-file" type="button" title="Nhập" onclick="myFunction(this)"><i
                  class="fas fa-file-upload"></i> Tải từ file</a>
            </div>
  
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                  class="fas fa-print"></i> In dữ liệu</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file js-textareacopybtn" type="button" title="Sao chép"><i
                  class="fas fa-copy"></i> Sao chép</a>
            </div>
  
            <div class="col-sm-2">
              <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất Excel</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm pdf-file" type="button" title="In" onclick="myFunction(this)"><i
                  class="fas fa-file-pdf"></i> Xuất PDF</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          
          <form action="{{route('admin.new.processUpdate',$post->id)}}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group ">
              <label class="control-label">Tiêu đề</label>
              <input class="form-control" type="text" name="title" value="{{$post->title}}" >
              @if ($errors->has('title'))
                  <span>{{$errors->first('title')}}</span>
              @endif
            </div>
            <div class="form-group ">
              <label class="control-label">Danh mục</label>
              <select class="col-md-3 form-control" name="id_category" id="">
                @forelse ($categories as $category)
                    @if ($category->id==$post->id_category)  
                        <option value="{{$category->id}}" selected>{{$category->ten_loai}}</option>  
                    @else
                        <option value="{{$category->id}}">{{$category->ten_loai}}</option>  
                    @endif
                @empty
                  <option value="">---</option>    
                @endforelse
              </select>
              @if ($errors->has('id_category'))
                  <span>{{$errors->first('id_category')}}</span>
              @endif
            </div>
            <div class="form-group ">
              <label class="control-label">Mô tả</label>
              <input class="form-control" type="text" name="description" value="{{$post->description}}" >
              @if ($errors->has('description'))
                  <span>{{$errors->first('description')}}</span>
              @endif
            </div>
            <div class="form-group  ">
              <label class="control-label">Ảnh </label>
              <div class="col-md-12 row" >
                  <div id="myfileupload col-md-4" >
                    <input type="file" id="uploadfile" style="display: none" name="image" />
                    <button type="button" class="bx Choicefile bx-upload"  onclick="document.getElementById('uploadfile').click();"></button>
                  </div>
                  <div class="col-md-2">
                    <img src="assets/img/{{$post->image}}" style="width: 100px" alt="">
                  </div>
              </div>
            </div>
            <textarea id="summernote" style="height: 500px" name="content"  >{{$post->content}}</textarea>
            <button type="submit" class="btn btn-primary mt-2 " >Đăng tải</button>
          </form>          
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script>
    $('#summernote').summernote({
        height: 300,
    });
    
</script>
@endsection