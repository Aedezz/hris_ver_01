<?php
error_reporting(E_ERROR | E_PARSE);
?>
<?php
	session_start();
	$userID=$_SESSION['idEoffice'];
	
	include"../../config/config.php";
	$kirim=$_GET['kirim'];
	switch($kirim){
		case "ceklogin" :
			include "kirim_ceklogin.php";
			break;

		case "hapus" :
			include "kirim_hapus.php";
			break;

		case "tambah" :
			include "kirim_tambah.php";
			break;

		case "edit" :
			include "kirim_edit.php";
			break;	

		
	}
?>