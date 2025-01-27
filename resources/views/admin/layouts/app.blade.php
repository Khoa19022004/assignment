<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title') | Quản trị Admin</title>
  <base href="{{env('APP_URL')}}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

  @yield('css')
  
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>

    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li><a class="app-nav__item" href="{{route('admin.logout')}}"><i class='bx bx-log-out bx-rotate-180'></i> </a></li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <img class="app-sidebar__user-avatar" src="" alt="No" >
      <div>
        <p class="app-sidebar__user-name"><b>Võ Trường</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
     
      <li >
        <a class="app-menu__item" href="{{route('admin.Dashboard')}} " >
          <i class='app-menu__icon bx bx-tachometer'></i>
          <span class="app-menu__label">Bảng điều khiển</span>
        </a>
      </li>
      <li >
        <a class="app-menu__item "  href="{{route('user.index')}}" >
          <i class='app-menu__icon bx bx-user-voice'></i>
          <span class="app-menu__label">Quản lý khách hàng</span>
        </a>
      </li>
      <li >
        <a class="app-menu__item "  href="{{route('category.index')}}" >
          <i class='app-menu__icon bx bx-user-voice'></i>
          <span class="app-menu__label">Quản lý danh mục</span>
        </a>
      </li>
      <li >
      <li >
        <a class="app-menu__item "  href="{{route('post.index')}}" >
          <i class='app-menu__icon bx bx-user-voice'></i>
          <span class="app-menu__label">Quản lý tin tức</span>
        </a>
      </li>
      <li >
        <a class="app-menu__item "  href="{{route('comment.index')}}" >
          <i class='app-menu__icon bx bx-user-voice'></i>
          <span class="app-menu__label">Quản lý bình luận</span>
        </a>
      </li>
   
    </ul>
  </aside>
  <main class="app-content">
    @yield('content')
  </main>

  @yield('script');
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="assets/js/popper.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <!--===============================================================================================-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="assets/js/main.js"></script>
  <!--===============================================================================================-->
  <script src="assets/js/plugins/pace.min.js"></script>
  <!--===============================================================================================-->
  <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
  <!--===============================================================================================-->

  <script>
    function selectMenuItem(item) {
        // Xóa lớp 'selected' từ tất cả các mục
        var items = document.querySelectorAll('.menu-item');
        items.forEach(function(el) {
            el.classList.remove('active');
        });
        console.log(item);
        // Thêm lớp 'selected' vào mục đã chọn
        item.classList.add('active');
    }
</script>

  <script>
        function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("myTable").deleteRow(i);
    }
  </script>

<script type="text/javascript">
  $(document).ready(function() {
      
      // Sử dụng delegation cho nút "Xóa"
      $(document).on("click", ".trash", function () {
          var userId = $(this).data('id');
          swal({
              title: "Cảnh báo",
              text: "Bạn có chắc chắn là muốn xóa nhân viên này?",
              buttons: ["Hủy bỏ", "Đồng ý"],
          })
          .then((willDelete) => {
              if (willDelete) {
                  $('#delete-form-' + userId).submit();
              }
          });
      });

      // Hiển thị thông báo thành công nếu có
      @if(session('success'))
      swal({
          title: 'Thành công',
          text: '{{ session('success') }}',
          icon: 'success'
      });
      @endif

      @if($errors->has('error'))
      swal({
        title: 'Thất bại',
        text: {!! json_encode($errors->first('error')) !!}, // Lấy lỗi từ $errors
        icon: 'error'
      });
      @endif
  });
</script>

</body>
</html>