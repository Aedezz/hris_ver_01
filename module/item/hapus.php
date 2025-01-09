<?php
	include "../../config/config.php";
		
	mysqli_query($koneksi,"DELETE FROM item WHERE id_item='$_GET[id_item]'");

	header('location:../../?p=item');
?>