@extends('admin.layouts.app')
@section('title')
    Quản lí danh mục
@endsection

@section('content')    
<div class="app-title">
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
  </ul>
  <div id="clock"></div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="row element-button">
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" href="{{route('admin.category.add')}}" title="Thêm"><i class="fas fa-plus"></i>
              Tạo mới danh mục</a>
          </div>
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
        <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
          id="sampleTable">
          <thead>
            <tr>
              <th width="10"><input type="checkbox" id="all"></th>
              <th width="50" >ID</th>
              <th width="100">Tên</th>
              <th width="150"> Hình ảnh</th>
              <th width="100">Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>{{$category->id}}</td>
              <td>{{$category->ten_loai}}</td>
              {{-- <td><img class="img-card-person" src="{{isset($comment->image)? $comment->image :""}}" alt=""></td> --}}
              <td width="150"><img class="w-100" src="assets/img/{{$category->image}}" alt=""></td>
              <td>
                <button class="btn btn-primary btn-sm trash" title="Xóa" data-id="{{ $category->id }}" >
                  <i class="fas fa-trash-alt"></i>
                </button>        
                <form action="{{route('admin.category.destroy',$category->id)}}" id="delete-form-{{$category->id}}" method="post" style="display: none"  >
                  @csrf
                  @method('DELETE')
                </form>
                <a href="{{route('admin.category.update',$category->id)}}">
                  <button class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp-{{$category->id}}" data-toggle="modal" data-target="#ModalUP">
                    <i class="fas fa-edit"></i>
                  </button>
                </a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')    
<!-- Essential javascripts for application to work-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
{{-- <script src="src/jquery.table2excel.js"></script> --}}
<!-- Page specific javascripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Data table plugin-->
<script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins /dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable({pageLength: 10});</script>
@endsection

