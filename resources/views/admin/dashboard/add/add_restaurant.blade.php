<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/fontawesome-free/css/all.min.css' ) }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css' ) }}">
  <!-- iCheck -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css' ) }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/jqvmap/jqvmap.min.css' ) }}">
  <!-- Theme style -->
  <link rel="stylesheet" href= "{{asset('asset/back/dist/css/adminlte.min.css' ) }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' ) }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/daterangepicker/daterangepicker.css' ) }}">
  <!-- summernote -->
  <link rel="stylesheet" href= "{{asset('asset/back/plugins/summernote/summernote-bs4.css' ) }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.back.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  @include('layout.back.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


  
  @include('layout.back.nav_link')


  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Restaurant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Restaurant Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Restaurant Name">
                  </div>
                  
                </div>
                <div class="card-body">
                  <div class="form-group">
                  <label>Address</label>
                        <textarea class="form-control" rows="3" placeholder="Restaurant Address ..."></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
  <!-- /.content-wrapper -->
  
  @include('layout.back.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('asset/back/plugins/jquery/jquery.min.js' ) }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('asset/back/plugins/jquery-ui/jquery-ui.min.js' ) }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('asset/back/plugins/bootstrap/js/bootstrap.bundle.min.js' ) }}"></script>
<!-- ChartJS -->
<script src="{{asset('asset/back/plugins/chart.js/Chart.min.js' ) }}"></script>
<!-- Sparkline -->
<script src="{{asset('asset/back/plugins/sparklines/sparkline.js' ) }}"></script>
<!-- JQVMap -->
<script src="{{asset('asset/back/plugins/jqvmap/jquery.vmap.min.js' ) }}"></script>
<script src="{{asset('asset/back/plugins/jqvmap/maps/jquery.vmap.usa.js' ) }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('asset/back/plugins/jquery-knob/jquery.knob.min.js' ) }}"></script>
<!-- daterangepicker -->
<script src="{{asset('asset/back/plugins/moment/moment.min.js' ) }}"></script>
<script src="{{asset('asset/back/plugins/daterangepicker/daterangepicker.js' ) }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('asset/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js' ) }}"></script>
<!-- Summernote -->
<script src="{{asset('asset/back/plugins/summernote/summernote-bs4.min.js' ) }}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('asset/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ) }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('asset/back/dist/js/adminlte.js' ) }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('asset/back/dist/js/pages/dashboard.js' ) }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/back/dist/js/demo.js' ) }}"></script>
</body>
</html>
