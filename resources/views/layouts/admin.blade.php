<?php
  $menu=config('menu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang quản lý shop áo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public/adminlte')}}/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/summernote/summernote-bs4.min.css"> 

    <script>
      window.setTimeout("dem_vn_clo()",1000);
      function getTime(){
        var time = new Date();
        var dow = time.getDay();
        if(dow==0)
          dow = "Chủ nhật";
        else if (dow==1)
          dow = "Thứ hai";
        else if (dow==2)
          dow = "Thứ ba";
        else if (dow==3)
          dow = "Thứ tư";
        else if (dow==4)
          dow = "Thứ năm";
        else if (dow==5)
          dow = "Thứ sáu";
        else if (dow==6)
          dow = "Thứ bảy";  
        var day = time.getDate();
        var month = time.getMonth()+1;
        var year = time.getFullYear();
        var hr = time.getHours();
        var min = time.getMinutes();
        var sec = time.getSeconds();
        day = ((day < 10) ? "0" : "") + day;
        month = ((month < 10) ? "0" : "") + month;
        hr = ((hr < 10) ? "0" : "") + hr;
        min = ((min < 10) ? "0" : "") + min;
        sec = ((sec < 10) ? "0" : "") + sec;
        return dow + " " + day + "/" + month + "/" + year + " " + hr + ":" + min + ":" + sec;
      }
      function dem_vn_clo(){
        var dem_vn_clo = document.getElementById("dem_vn_clo");
        if (dem_vn_clo != null)
          dem_vn_clo.innerHTML = getTime();
        setTimeout("dem_vn_clo()", 1000);
      }
    </script>
    {{-- <script type="text/javascript">
      toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    </script> --}}
  <script>
    function SHPassword(x)
    {
      var chbox=x.checked;
      if(chbox)
      {
        document.getElementById("password").type="text";
      }
      else{
        document.getElementById("password").type="password";
      }
      
    }
  </script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    {{-- <b><span style="color: rgb(255, 187, 0)" id="dem_vn_clo"></span></b> --}}
      <li class="nav-item d-none d-sm-inline-block">
        
        <a class="nav-link">
          <marquee width="100%" behavior="scroll" scrollamount="10">  
            <h5>Xin chào bạn {{Auth::user()->hovaten}}! Đây là trang Quản lý Shop bán áo. Bạn đang đăng nhập bằng tài khoản {{Auth::user()->tendangnhap}}.</h5>
        </marquee>
        </a>
      </li>
      

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      
    
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
         
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
  
        <!-- Messages Dropdown Menu -->
       
        <!-- Notifications Dropdown Menu -->
      
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
      
    </ul>
  </nav>
  <!-- /.navbar -->

    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <ul class="nav nav-pills nav-sidebar flex-column">
        <div class="image">
          @foreach ($lienhe as $item)
          <img src="{{url('public/uploads')}}/{{$item->logo}}" width="50%" alt="AdminLTE Logo" class="brand-image rounded mx-auto d-block" style="opacity: .8">
          @endforeach
          <div class="info mt-3 mb-3 text-center">
            @if(Auth::user()->chucvu_id==1)
            <b><a class="d-block" style="color: red">Quản lý: {{Auth::user()->hovaten}}</a></b>
            @else
            <b><a class="d-block tex-center" style="color: rgb(0, 153, 255)">Nhân viên: {{Auth::user()->hovaten}}</a></b>
            @endif
          </div>
          <div class="text-center"><b><span style="color: rgb(255, 187, 0)" id="dem_vn_clo"></span></b></div>

        </div>
           
       
       
        {{-- <div class="info">
          <a href="" class="d-block">{{Auth::user()->hovaten}}</a>
        </div> --}}
     
      </ul>
      <!-- SidebarSearch Form -->
      @if(Auth::user()->trangthai==0)
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
              
          
          @foreach ($menu as $m)
          <li class="nav-item">
            <a href="{{route($m['route'])}}" class="nav-link">
              <i class="nav-icon fas {{$m['icon']}}"></i>
              <p>
                {{$m['label']}}
                @if (isset($m['item']))
                     <i class="right fas fa-angle-left"></i>           
                @endif
               
              </p>
            </a>
            @if (isset($m['item']))
              <ul class="nav nav-treeview">
                @foreach($m['item'] as $mit)
                  <li class="nav-item">
                    <a href="{{route($mit['route'])}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{$mit['label']}}</p>
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
         
         
          @endforeach
    
        </ul>
      </nav>
      @elseif(Auth::user()->trangthai==1)
      <a href="{{route('dangxuat')}}" class="nav-link">
        <i class="fas fa-sign-out-alt"></i>
          Đăng xuất
      </a>
      @endif


      
    </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                @yield('main')
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy;2021 <a href="https://www.facebook.com/ntphatdesigner" target="_blank">Nguyễn Tấn Phát</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('public/adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('public/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public/adminlte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('public/adminlte')}}/dist/js/demo.js"></script>
{{-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
<script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/decoupled-document/ckeditor.js"></script> --}}

<!-- DataTables  & Plugins -->
<script src="{{url('public/adminlte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
{!! Toastr::message() !!}


<!-- Summernote -->
<script src="{{url('public/adminlte')}}/plugins/summernote/summernote-bs4.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

  })
</script>

<script>
  CKEDITOR.replace('chitiet');
  CKEDITOR.replace('noidung');
</script>

{{-- <script>
  function LayNoiDung(){
            var data = CKEDITOR.instances.chitiet.getData();
            alert(data)
        }
</script> --}}

{{-- <script src="{{url('public/ckeditor')}}/ckeditor.js"></script> --}}

<script src="{{url('resources/js')}}/Validator.js"></script>

<script>
  Validator({
    form:'#idForm',
    rule:[
      Validator.isRequired('#idInput'),
    ]
  });


</script>

<script>
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if(!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>


{{-- @yield('js') --}}
@yield('cke')
</body>
</html>

