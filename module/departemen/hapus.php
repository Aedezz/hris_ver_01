<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM sect WHERE kode='$_GET[kode]'");

	header('location:../../?p=departemen');
?>