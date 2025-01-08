<?php
include "config/UserInfo.php";
$log  = UserInfo::get_ip().' - '.date("d-m-Y H:i:s").' - '.UserInfo::get_device().' - '.UserInfo::get_os().' - '.UserInfo::get_browser().PHP_EOL.				
	"-------------------------------------------------------------------------------------------------------------------------------".PHP_EOL;
file_put_contents('8787.txt', $log, FILE_APPEND);

	session_start();
	if(isset($_SESSION['idEoffice'])){
		$idUser=$_SESSION['idEoffice'];
		require "halaman.php";
	}
	else{
		require "login.php";
	}
?>

