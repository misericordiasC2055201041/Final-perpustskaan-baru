<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= (isset($pageTitle)) ? $pageTitle : 'Document'; ?></title>
  <base href="/">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
  
      <i class="nav-icon fas fa-arrow-left" role="button" onclick="history.back(-1)" > </i>
  
      <!-- Right navbar links -->
      
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-2" >
      <!-- Brand Logo -->
      <a class="brand-link">
        <img src="dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Perpustakaan</span>
      </a>

      <!-- Sidebar -->

      <div class="sidebar ">
        <!-- Sidebar Menu -->
        <nav class="mt-2 " >
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <span class="brand-link">
            <span class="brand-text font-weight">Menu Perpustakaan</span>
          </span>
            <li class="nav-item">
              <a href="<?= route_to('user.home') ?>" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Home

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= route_to('user.profile') ?>" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Profile

                </p>
              </a>
            </li>

            <span class="brand-link">
            <span class="brand-text font-weight">Detail Perpustakaan</span>
          </span>
          <li class="nav-item">
              <a href="<?= route_to('user.anggota') ?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  anggota

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= route_to('user.buku') ?>" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                 buku

                </p>
              </a>
            </li>
            
            <span class="brand-link">
            <span class="brand-text font-weight">Transaksi Perpustakaan</span>
          </span>
          <li class="nav-item">
              <a href="<?= route_to('user.transaksi') ?>" class="nav-link">
                <i class="nav-icon fas fa-laptop"></i>
                <p>
                  Form transaksi
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
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid"  data-bs-spy="scroll">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $pageTitle ?></h1>
            </div><!-- /.col -->
           
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">

          <?= $this->renderSection('content'); ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>By Kelompok 4</a></strong> 
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>

  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script>
    $(function() {
    bsCustomFileInput.init();
    });
  </script>


</body>

</html>