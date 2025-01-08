<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM cabang WHERE kode='$_GET[idcabang]'");

	header('location:../../?p=cabang');
?>