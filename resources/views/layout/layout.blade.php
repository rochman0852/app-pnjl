<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

  <!--css nav dropdown mine-->
  <link rel="stylesheet" href="{{asset('assets/dist/css/cssme.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
  <!-- summernote -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- {{-- js --}} -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  @yield('navbar')
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <a href="#"><i class="fas fa-user-circle"></i></a> 
          {{-- <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">selamat datang </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="/penjualan" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Penjualan
                <i class="fas fa-angle-left right"></i>  
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link onclick">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Data master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/costumer" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Costumer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>  
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <main>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Kembali</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="container-fluid"> 
    @yield('content')
    <div class="row">
    <!-- /.content -->
  </div>
</main>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  <strong style="text-align:center";>Copyright &copy;  <a href="#">fazrur rahman</a></a>{{now()->format('Y')}}</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>
<!-- js jam -->

    <!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- //<script src="{{asset('assets/dist/js/demo.js')}}"></script> --}}
<!-- page script -->
{{-- <script src="{{asset('assets/dist/js/jquery-3.5.0.js')}}"></script> --}}
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script>
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


$(document).ready(function(){
 $('#tombol-cari').click(function(e){
   e.preventDefault();

    // var nama=$('input[nama=costumer]').val();
    // var njir=$("#query-costumer").val();

    $.ajax({
      type: "post",
      url: "/cariCostumer",
      data: {nama : $("#query-costumer").val()},
    
      success: function (response) {
        // console.log(response)
      // $('.target-costumer').html(response);
      $("#nama-cus").val(response[0]['nama']);
      $("#id-cus").val(response[0]['id']);

      },
      error:function(){
        console.log("error njir")
      }
    });
 });
});

$(document).ready(function(){
 $('#cari-barang').click(function(e){
   e.preventDefault();

    $.ajax({
      type: "post",
      url: "/cariBarang",
      data: {nama : $("#query-barang").val()},
    
      success: function (response) {
        // console.log(response)
     
      $("#target-id").val(response[0]['id']);
      $("#target-harga").val(response[0]['harga']);

      },
      error:function(){
        console.log("error njir")
      }
    });
 });
});

$(document).ready(function(){
 $('#tambah-belanjaan').click(function(e){
   e.preventDefault();

    $.ajax({
      type: "post",
      url: "/detailTran",
      data: {id : $("#target-id").val(),
      harga: $("#target-harga").val(),
      quantity: $("#quantity").val(),
      id_tran: $("#id_tran").val(),
      total: $("#quantity").val()*$("#target-harga").val(),
      },
    
      success: function (response) {
        $( "#tabel-belanje" ).load("/tes");
     
      // $("#target-id").val(response[0]['id']);
      // $("#target-harga").val(response[0]['harga']);

      // if(response.success){
      //              //Message come from controller


      //         }else{
      //             alert("Error")
      //         }   

      },
      error:function(error){
        console.log(error)
      }
    });
 });
});
</script>



 


</body>
</html>
