<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM jabatan WHERE kode='$_GET[idjabatan]'");

	header('location:../../?p=jabatan');
?>