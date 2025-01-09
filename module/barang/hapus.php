<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$_GET[id_barang]'");

	header('location:../../?p=barang');
?>