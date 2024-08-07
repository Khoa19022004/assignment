@extends('admin.layouts.app')
@section('title')
    Quản lí người dùng
@endsection

@section('content')    
<div class="app-title">
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
  </ul>
  <div id="clock"></div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">

        <div class="row element-button">
          <div class="col-sm-2">

            <a class="btn btn-add btn-sm" href="{{route('user.create')}}" title="Thêm"><i class="fas fa-plus"></i>
              Tạo mới người dùng</a>
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
              <th>ID</th>
              <th width="150">Họ và tên</th>
              <th width="150">UserName</th>
              <th width="40">Hình ảnh</th>
              <th width="100">Email</th>
              <th>Giới tính</th>
              <th>Vai trò</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td width="10"><input type="checkbox"></td>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->username}}</td>
              <td width="100"><img class="w-100" src="assets/img/{{$user->image}}" alt=""></td>
              <td>{{$user->email}}</td>
              <td>{{$user->sex}}</td>
              <td>{{$user->role}}</td>
              <td>
                <button class="btn btn-primary btn-sm trash" title="Xóa" data-id="{{ $user->id }}" >
                  <i class="fas fa-trash-alt"></i>
                </button>        
                <form action="{{route('user.destroy',$user->id)}}" id="delete-form-{{$user->id}}" method="post" style="display: none"  >
                  @csrf
                  @method('DELETE')
                </form>
                <a href="{{route('user.edit',$user->id)}}">
                  <button class="btn btn-primary btn-sm edit" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i>
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

