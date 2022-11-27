<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siber-ket</title>
    <link rel="icon shortcut" href="/Assets/AdminLTE-3.2.0/img/Siber-ket-with-bg.png">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') ?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/dist/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <div class="user-panel d-flex">
                    <!-- <div class="image">
                        <a href="/viewakun">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-circle elevation-2 mr-1" alt="User Image">
                        </a>

                    </div> -->

                </div>
            </ul>

            <!-- Navbar Search
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
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
                </li> -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4" style="background-color: #ffffff;">
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="<?php echo base_url('/Assets/AdminLTE-3.2.0/img/siber-ket-with-bg.png') ?>" alt="Siberlogo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <img src="<?php echo base_url('/Assets/AdminLTE-3.2.0/img/tulisansiber.png') ?>" alt="Tulisan" class="brand-image" style="width: 150px;">
                <h4 class="" style="color: #000000;"><b></b></h4>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <style>
                    .container-bg {
                        background: #800000;
                        border-radius: 10px;
                    }
                </style>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <div class="container-bg mt-4">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="/dashboardkaryawan" class="nav-link">
                                        <i class="nav-icon fas fa-book" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Data Member
                                            <!-- <i class="fas fa-angle-left right"></i> -->
                                        </p>
                                    </a>
                                </li>
                            </div>
                        </div>

                        <div class="container-bg mt-4">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="/karyawan/logout" class="nav-link">
                                        <i class="fa fa-sign-out-alt" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Logout
                                            <!-- <i class="fas fa-angle-left right"></i> -->
                                        </p>
                                    </a>
                                </li>
                            </div>
                        </div>
                        <!-- <div class="container-bg mt-4">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table float" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Data Member
                                            <i class="fas fa-angle-left right mr-2"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="pages/tables/simple.html" class="nav-link">
                                                <i class="far fa-circle nav-icon" style="color:#ffffff;"></i>
                                                <p style="color:#ffffff;">Hari ini</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/tables/data.html" class="nav-link">
                                                <i class="far fa-circle nav-icon" style="color:#ffffff;"></i>
                                                <p style="color:#ffffff;">Minggu ini</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                                <i class="far fa-circle nav-icon" style="color:#ffffff;"></i>
                                                <p style="color:#ffffff;">Bulan ini</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </div> -->
                    </ul>
                </nav>
            </div>
    </div>

    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>