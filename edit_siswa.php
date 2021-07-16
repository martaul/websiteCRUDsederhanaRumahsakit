<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_siswa.php');
}

//ambil id dari query string
$nis= $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM msiswa WHERE nis='$nis'";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

?>

<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Siswa</title>

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
                    <a href="#" class="nav-link active">
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
                        <a href="data_siswa.php" class="nav-link active">
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
                    <a href="nilaisiswa.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Nilai Siswa</p>
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
                    <h1 class="m-0">Edit Data Siswa</h1>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- TABLE -->
            <div class="container">
			  <div class="card mb-3" style="max-width: 1000px;">
				  <div class="row no-gutters">
				    <div class="col-lg-5">
				      <img src="img/matpel.png" alt="smp">
				    </div>
				    <div class="col-lg-7">
				      <div class="card-body">
				        <form action="proses_edit_siswa.php" method="POST">
				        <input type="hidden" name="nis" value="<?php echo $siswa['nis'] ?>" />

				        	<div class="form-group">
								<label for="nis">nis</label>
							    <input type="text" class="form-control" name="nis" placeholder="nis" value="<?php echo $siswa['nis'] ?>">
							</div>

							<div class="form-group">
								<label for="nama_siswa">nama_siswa:</label>
							    <input type="text" class="form-control" name="nama_siswa" placeholder="nama_siswa" value="<?php echo $siswa['nama_siswa'] ?>">
							</div>

							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin:</label>
							    <div class="form-check">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L" checked>
								  <label class="form-check-label" for="L">
								    Laki-Laki
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="jenis_kelamin" id="W" value="W">
								  <label class="form-check-label" for="W">
								    Perempuan
								  </label>
								</div>
							</div>

							<div class="form-group">
								<label for="tempat_lahir">tempat_lahir:</label>
							    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir" value="<?php echo $siswa['tempat_lahir'] ?>">
							</div>

							<div class="form-group">
								<label for="tgl_lahir">tgl_lahir:</label>
							    <input type="date" class="form-control" name="tgl_lahir" placeholder="tgl_lahir" value="<?php echo $siswa['tgl_lahir'] ?>">
							</div>

							<div class="form-group">
							    <label for="alamat">alamat</label>
							    <textarea class="form-control" name="alamat" rows="3"><?php echo $siswa['alamat'] ?></textarea>
							</div>

							<div class="form-group">
								<label for="no_hp">no_hp:</label>
							    <input type="text" class="form-control" name="no_hp" placeholder="no_hp" value="<?php echo $siswa['no_hp'] ?>">
							</div>

							<div class="form-group">
								<label for="foto">foto:</label>
							    <input type="text" class="form-control" name="foto" placeholder="foto" value="<?php echo $siswa['foto'] ?>">
							</div>

							<div class="form-group">
								<label for="id_kelas">id_kelas:</label>
							    <input type="text" class="form-control" name="id_kelas" placeholder="id_kelas" value="<?php echo $siswa['id_kelas'] ?>">
							</div>

							<div class="form-group">
								<label for="asal_sekolah">asal_sekolah:</label>
							    <input type="text" class="form-control" name="asal_sekolah" placeholder="asal_sekolah" value="<?php echo $siswa['asal_sekolah'] ?>">
							</div>

							<div class="form-group">
								<label for="nama_ortu">nama_ortu:</label>
							    <input type="text" class="form-control" name="nama_ortu" placeholder="nama_ortu"  value="<?php echo $siswa['nama_ortu'] ?>">
							</div>

							<div class="form-group">
								<label for="pekerjaan_ortu">pekerjaan_ortu:</label>
							    <input type="text" class="form-control" name="pekerjaan_ortu" placeholder="pekerjaan_ortu" value="<?php echo $siswa['pekerjaan_ortu'] ?>">
							</div>
							</div>

							<button type="submit" value="simpan" name="simpan" class="btn btn-success btn-lg btn-block">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
								<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
								</svg>	Simpan
							</button>

				        </form>      
				      </div>
				    <a class="btn btn-danger" href="index.php" role="button">
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
	