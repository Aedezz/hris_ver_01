<?php
	$server = "localhost:3316";	
	$username = "root";			
	$password = "";	
	$database = "db_dlh_new";	
		
	$mysqli=new mysqli($server,$username,$password,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
	
 $koneksi = mysqli_connect($server,$username,$password,$database);	

?>