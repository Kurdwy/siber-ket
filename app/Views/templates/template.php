<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siber-ket</title>
  <link rel="icon shortcut" href="/Assets/AdminLTE-3.2.0/img/Siber-ket-with-bg.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-danger " style="background-color: #800000;">
      <div class="container-fluid justify-content-center">
        <a href="/Assets/AdminLTE-3.2.0/index3.html" class="navbar-brand">
          <img src="/Assets/AdminLTE-3.2.0/img/siber-ket.png" alt="FOTO HILANG" width="50px">
          <span class="brand-text font-weight-light" style="color: white;"><b>Siber-ket</b></span>
        </a>

        <!-- <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse order-3 container justify-content-center" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="nav nav-pills flex-column flex-sm-row ">
            <div class="navbar navbar-expand-lg border rounded-3" style="background-color: #ffd204; ">
              <li class="nav-item" style="margin-left: 50px ;">
                <a href="/home" class="nav-link" style="color:#000000;">Home</a>
              </li>

              <li class="nav-item">
                <a href="/guide" class="nav-link" style="color:#000000;">Guide</a>
              </li>

              <li class="nav-item" style="margin-right: 50px ;">
                <a href="/about" class="nav-link" style="color:#000000;">About</a>
              </li>

            </div>
          </ul>

          <!-- SEARCH FORM -->

        </div>



        <!-- Right navbar links -->

      </div>
      <!-- <button type="submit" class="btn btn-warning" style="margin-right: 20px ;">Login</button> -->
      <!-- <div class="dropdown">
        <button class="btn btn-warning" style="margin-right: 15px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Login
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-end border" style="background-color: #ffd204;">
          <li><a class="dropdown-item" href="/formloginadmin">Admin</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="/formloginkaryawan">Karyawan</a></li>
        </ul>
      </div> -->
      <button type="button" class="btn btn-warning me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Login
      </button>
    </nav>
    <!-- /.navbar -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Login Sebagai</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <a class="dropdown-item" href="/formloginadmin">Admin</a><br>
            <a class="dropdown-item" href="/formloginkaryawan">Karyawan</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:#ffffff;">
      <!-- Content Header (Page header) -->
      <div class="content-header" style="background-color: 800000;">
        <div class="container" style="background-color: 800000;">
          <?php $this->renderSection('content'); ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">

          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer" class="container-fluid" style="text-align:center; background-color:#800000; color:white;">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        <i>siber-family</i>
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/Assets/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/Assets/AdminLTE-3.2.0/dist/js/demo.js"></script>
  <!-- Summernote -->
  <script src="/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('#deskripsi').summernote()
    })
  </script>
</body>

</html>