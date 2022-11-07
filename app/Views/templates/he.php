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
    <link rel="stylesheet" href="<?php echo base_url('/Assets/AdminLTE-3.2.0/dist/css/alt/style.css') ?>">
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
                    <div class="image">
                        <img src="<?php echo base_url('/Assets/AdminLTE-3.2.0/dist/img/avatar2.png') ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">FARHAN KEBAB</a>
                    </div>
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
                <img src="<?php echo base_url('/Assets/AdminLTE-3.2.0/img/siber-ket-with-bg.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <h4 class="brand-text font-weight-light"><b>Siber-ket</b></h4>
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
                        <div class="container-bg">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-bar" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Dashboard
                                            <!-- <i class="fas fa-angle-left right"></i> -->
                                        </p>
                                    </a>
                                </li>
                            </div>
                        </div>

                        <div class="container-bg mt-4">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Validasi Member
                                            <!-- <i class="fas fa-angle-left right"></i> -->
                                        </p>
                                    </a>
                                </li>
                            </div>
                        </div>

                        <div class="container-bg mt-2">
                            <div class="card-bg">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table float" style="color:#ffffff;"></i>
                                        <p style="color:#ffffff;">
                                            Akun Karyawan
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/regis" class="nav-link">
                                                <i class="far fa-circle nav-icon" style="color:#ffffff;"></i>
                                                <p style="color:#ffffff;">Akun Baru</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/listkaryawan" class="nav-link">
                                                <i class="far fa-circle nav-icon" style="color:#ffffff;"></i>
                                                <p style="color:#ffffff;">Lihat Karyawan</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>