<?php
include "../../config/UserInfo.php";
$ip=UserInfo::get_ip();
$device=UserInfo::get_device();
$os=UserInfo::get_os();
$browser=UserInfo::get_browser();
$tanggal=date("Y-m-d H:i:s");
	session_start();
	
	$username=$_POST['username'];
	$captcha = $_POST['captcha'];

	$cekuser=mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
	$datauser=mysqli_fetch_array($cekuser);
	$password=password_verify($_POST['password'], $datauser['password']);
	if($password){
		if($_SESSION['captcha'] == $captcha){
		$_SESSION['idEoffice']=$datauser['id'];
		$_SESSION['username']=$_POST['username'];
		mysqli_query($koneksi,"INSERT INTO failed_login(user,ip,device,os,browser,tanggal)
		VALUES('$username','$ip','$device','$os','$browser','$tanggal')");
		echo "1";
		}else
		{
		mysqli_query($koneksi,"INSERT INTO failed_login(user,ip,device,os,browser,tanggal,status)
		VALUES('$username','$ip','$device','$os','$browser','$tanggal','0')");
		echo "
		<div class='alert alert-danger alert-dismissible'>
                <button  onClick='window.location.reload();'  type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h5><i class='icon fa fa-ban'></i> Alert!</h5>
                Invalid Kode Verifikasi!
              </div>";
			  
	}
			
		
	}
	else
	{
		mysqli_query($koneksi,"INSERT INTO failed_login(user,ip,device,os,browser,tanggal,status)
		VALUES('$username','$ip','$device','$os','$browser','$tanggal','0')");
		echo "
		<div class='alert alert-danger alert-dismissible'>
                <button onClick='window.location.reload();' type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h5><i class='icon fa fa-ban'></i> Alert!</h5>
                User Name dan password salah!
              </div>";  

		
	}


?>