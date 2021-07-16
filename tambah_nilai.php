<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Nilai Siswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
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
              <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
              </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Navbar Search -->
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
              </li>

              <!-- Messages Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
                </a>
              </li>
              <!-- Notifications Dropdown Menu -->
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
                </a>
              </li>
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
          </nav>
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
              <img src="img/logo.gif" alt="Logo ubj" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">Ubharajaya</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                  <img src="img/marta.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                  <a href="#" class="d-block">Martaulina</a>
                </div>
              </div>

              <!-- SidebarSearch Form -->
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                    </button>
                  </div>
                </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Master
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="data_mata_pelajaran.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Mata Pelajaran</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="data_siswa.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Siswa</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="data_kelas.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Kelas</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="data_guru.php" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Guru</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-header">Data Transaksi</li>
                  <li class="nav-item">
                    <a href="nilaisiswa.php" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Nilai Siswa</p>
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
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Tambah Nilai Siswa</h1>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- TABLE -->
            <div class="container my-4">
      			  <div class="card">
      				  <div class="row no-gutters">
      				    <div class="col-lg-5">
      				      <img src="img/matpel.png" alt="matpel">
      				    </div>
      				    <div class="col-lg-7">
      				      <div class="card-body">	
      				        <form action="proses_tambah_nilai.php" method="POST">
      				        	<div class="form-group">
      								<label for="id_nilai_siswa">id_nilai_siswa</label>
      							    <input type="text" class="form-control" name="id_nilai_siswa" placeholder="id_nilai_siswa">
      							</div>

      							<div class="form-group">
      								<label for="nis">nis:</label>
      							    <input type="text" class="form-control" name="nis" placeholder="nis">
      							</div>

      							<div class="form-group">
      								<label for="id_matpel">ID Matpel:</label>
      							    <input type="text" class="form-control" name="id_matpel" placeholder="id_matpel">
      							</div>

      							<div class="form-group">
      								<label for="id_kelas">id_kelas:</label>
      							    <input type="text" class="form-control" name="id_kelas" placeholder="id_kelas">
      							</div>

      							<div class="form-group">
      								<label for="id_guru">id_guru:</label>
      							    <input type="text" class="form-control" name="id_guru" placeholder="id_guru">
      							</div>

      							<div class="form-group">
      								<label for="id_tahun_ajaran">id_tahun_ajaran:</label>
      							    <input type="text" class="form-control" name="id_tahun_ajaran" placeholder="id_tahun_ajaran">
      							</div>

      							<div class="form-group">
      								<label for="id_semester">id_semester:</label>
      							    <input type="text" class="form-control" name="id_semester" placeholder="id_semester">
      							</div>

      							<div class="form-group">
      								<label for="nilai_harian1">nilai_harian1:</label>
      							    <input type="text" class="form-control" name="nilai_harian1" placeholder="nilai_harian1">
      							</div>

      							<div class="form-group">
      								<label for="nilaiharian2">nilaiharian2:</label>
      							    <input type="text" class="form-control" name="nilaiharian2" placeholder="nilaiharian2">
      							</div>

      							<div class="form-group">
      								<label for="nilaiharian3">nilaiharian3:</label>
      							    <input type="text" class="form-control" name="nilaiharian3" placeholder="nilaiharian3">
      							</div>

      							<div class="form-group">
      								<label for="nilai_tugas1">nilai_tugas1:</label>
      							    <input type="text" class="form-control" name="nilai_tugas1" placeholder="nilai_tugas1">
      							</div>

      							<div class="form-group">
      								<label for="nilai_tugas2">nilai_tugas2:</label>
      							    <input type="text" class="form-control" name="nilai_tugas2" placeholder="nilai_tugas2">
      							</div>

      							<div class="form-group">
      								<label for="nilai_uts">nilai_uts:</label>
      							    <input type="text" class="form-control" name="nilai_uts" placeholder="nilai_uts">
      							</div>

      							<div class="form-group">
      								<label for="nilai_uas">nilai_uas:</label>
      							    <input type="text" class="form-control" name="nilai_uas" placeholder="nilai_uas">
      							</div>




      							<button type="submit" value="simpan" name="simpan" class="btn btn-primary btn-lg btn-block">
      								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
      								  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
      								</svg>	Simpan
      							</button>

      				        </form>      
      				      </div>
      				    <a class="btn btn-danger" href="data_mata_pelajaran.php" role="button">
      				      	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
      						  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
      						</svg></i>
      						Kembali
      					</a>
      				    </div>
      				  </div>
      				</div>
      			</div>
         </div>
    </div>
 <style type="text/css">
		img{
			height: 400px;
			width: 400px;
		}
 </style>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
