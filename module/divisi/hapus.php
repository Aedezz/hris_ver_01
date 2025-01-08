<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM divisi WHERE kode='$_GET[kode]'");

	header('location:../../?p=divisi');
?>