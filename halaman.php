<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php
	include "config/config.php";
	
session_start();

// Check if last activity was set
if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 900) {
  // last request was more than 15 minutes ago
  session_unset(); // unset $_SESSION variable for the run-time
  session_destroy(); // destroy session data in storage
  header("Location: login.php"); // redirect to login page
}
$_SESSION['last_activity'] = time(); // update last activity time stamp	
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>E-Office | Home</title>

  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="asset/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-sm navbar-dark navbar-blue">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">        
        <span class="brand-text font-weight-light">Mitra Suzuki</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">          
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class='fas fa-swatchbook'></i> Master Data</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="?p=cabang" class="dropdown-item"><i class='fas fa-map-marker-alt'></i> Cabang </a></li>
              <li><a href="?p=jabatan" class="dropdown-item"><i class='fas fa-satellite-dish'></i> Jabatan</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-stream'></i> Divisi</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-server'></i> Departemen</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-tablet-alt'></i> Section</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-tag'></i> Status</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-plane'></i> Kota Tujuan</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-shopping-cart'></i> Biaya SPD</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-comments-dollar'></i> Biaya Transport</a></li>
              <li><a href="#" class="dropdown-item"><i class='far fa-address-card'></i> Atur Cuti</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-chalkboard-teacher'></i> Laporan Karyawan</a></li>
			  
			  
            </ul>
          </li>
		  
		  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class='fas fa-user-tag'></i> P&O</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item"><i class='fas fa-user-friends'></i> Daftar Karyawan </a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-user-edit'></i> Permintaan Karyawan</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-user-plus'></i> Penilaian Karyawan Kontrak</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-user-tag'></i> Penilaian Kinerja Karyawan (Tahunan)</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-car-side'></i> Unit</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-hotel'></i> Sewa</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-clipboard-list'></i> Perizinan</a></li>             
            </ul>
          </li>
		  
		  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> <i class='far fa-id-badge'></i> ESS</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item"><i class='fas fa-calendar-times'></i> Cuti </a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-shipping-fast'></i> Perjalanan Dinas</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-calendar-minus'></i> Off Kerja</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-ambulance'></i> Perbaikan Kendaraan</a></li>
              
            </ul>
          </li>
		  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> <i class='fas fa-clock'></i> ATT</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item"><i class='fas fa-chalkboard-teacher'></i> Finger</a></li>
			  <li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item"><i class='far fa-bell-slash'></i> Karyawan Cuti</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-chalkboard-teacher'></i> Karyawan SPD</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-comment-slash'></i> Telat</a></li>
			   <li class="dropdown-divider"></li>
              <li><a href="#" class="dropdown-item"><i class='far fa-calendar'></i> Absen Per Tanggal</a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-hourglass'></i> Absen Per Cabang</a></li>
              <li><a href="#" class="dropdown-item"><i class='far fa-hourglass'></i> Absen Per Divisi</a></li>
              <li><a href="#" class="dropdown-item"><i class='far fa-id-badge'></i> Absen Per Karyawan</a></li>
		  
            </ul>
          </li>
		  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> <i class='fas fa-comments-dollar'></i> Purchase</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              	<li><a href="#" class="dropdown-item"><i class='fas fa-file-alt'></i> Item</a></li>
				<li><a href="#" class="dropdown-item"><i class='fas fa-pencil-alt'></i> ATK</a></li>
				<li><a href="#" class="dropdown-item"><i class='fas fa-user-tie'></i> Suplier</a></li>
				<li><a href="#" class="dropdown-item"><i class='far fa-file-pdf'></i> Laporan PDF</a></li>
				<li><a href="#" class="dropdown-item"><i class='far fa-file-excel'></i> Laporan Excel</a></li>
				<li><a href="#" class="dropdown-item"><i class='fas fa-file-excel'></i> Export ATK</a></li>
				<li><a href="#" class="dropdown-item"><i class='fas fa-folder-open'></i> History Permintaan</a></li>
				<li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item"><i class='fas fa-envelope-open-text'></i> Office Supply </a></li>
              <li><a href="#" class="dropdown-item"><i class='fas fa-book'></i> Non Office Supply</a></li>
              <li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item"><i class='fas fa-edit'></i> ATK</a></li>
            </ul>
          </li> 
		  <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"> <i class='fas fa-user-secret'></i> IT</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Barang </a></li>
			  <li><a href="#" class="dropdown-item">Item </a></li>
			  <li><a href="#" class="dropdown-item">History </a></li>
			  <li><a href="#" class="dropdown-item">Komputer </a></li>
			  <li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item">Aktivitas Harian </a></li>
              <li><a href="#" class="dropdown-item">Networking</a></li>
              <li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item">Form Instal Komputer</a></li>
			  <li><a href="#" class="dropdown-item">Form Pembuatan User/Reset Password</a></li>
			  <li><a href="#" class="dropdown-item">Form Perbaikan Perangkat</a></li>
				<li class="dropdown-divider"></li>
			  <li><a href="#" class="dropdown-item">Help/Jurnal IT</a></li>
			 
			</ul>
          </li> 
		  
		  
		  
        </ul>
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item dropdown">
        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
		<i class="fas fa-user"></i> <span class="upper"> <?php echo getUser("nama",$idUser);?></span>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Profil Pengguna</span>
          <div class="dropdown-divider"></div>
          <a href="./?p=update" class="dropdown-item">
            <i class="fas fa-clock"></i> Absensi</a>
			<a href="./?p=update" class="dropdown-item">
            <i class="fas fa-user"></i> Profile</a>
		  
		  <a href="./?p=update" class="dropdown-item">
            <i class="fas fa-key"></i> Ubah Password</a>
          <div class="dropdown-divider"></div>
          <a href="logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i>Log Out
            
          </a>
		  </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      
    </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <?php include "konten.php" ?>  
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
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="asset/AdminLTE-3.0.2/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/AdminLTE-3.0.2/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/AdminLTE-3.0.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/AdminLTE-3.0.2/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/AdminLTE-3.0.2/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="asset/AdminLTE-3.0.2/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="asset/AdminLTE-3.0.2/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/AdminLTE-3.0.2/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/AdminLTE-3.0.2/plugins/moment/moment.min.js"></script>
<script src="asset/AdminLTE-3.0.2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/AdminLTE-3.0.2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/AdminLTE-3.0.2/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/AdminLTE-3.0.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/AdminLTE-3.0.2/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/AdminLTE-3.0.2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/AdminLTE-3.0.2/dist/js/demo.js"></script>


<!-- DataTables -->
<script src="asset/AdminLTE-3.0.2/plugins/datatables/jquery.dataTables.js"></script>
<script src="asset/AdminLTE-3.0.2/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script type="text/javascript">
function formatRupiah(angka, prefix)
{
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split	= number_string.split(','),
    sisa 	= split[0].length % 3,
    rupiah 	= split[0].substr(0, sisa),
    ribuan 	= split[0].substr(sisa).match(/\d{3}/gi);
    
  if (ribuan) {
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }
  
  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

function toAngka(rp){
  return parseInt(rp.replace(/,.*|\D/g,''),10);
}	
</script>

</body>
</html>
