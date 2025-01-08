<?php
/*
0 : BARU
1 : PROSES MM
2 : APPROVE MM
3 : APPROVE MT
4 : PROSES MT
5 : SELESAI
*/

$create_by=getUser("username",$userID);
$date_create=date("Y-m-d H:i:s");
	switch ($_GET['tambah']) {		
		case 'user':
			$username=$_POST['username'];
			$password=password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12,]);
			$nama=$_POST['nama'];	
			$role=$_POST['role'];	
			$alamat=$_POST['alamat'];	
			$jabatan=$_POST['jabatan'];	
			mysqli_query($koneksi,"INSERT INTO user(username,password,nama,alamat,role,dibuat,tgl_dibuat,jabatan) 
			VALUES('$username','$password','$nama','$alamat','$role','$create_by','$date_create','$jabatan')");
			header("Location: ../../?p=user");
		break;		
		case 'hak_akses':
			$yes=$_POST['yes'];
			$menu=$_POST['menu'];
			$user=$_POST['user'];
			if($yes==1){
				mysqli_query($koneksi,"INSERT INTO hak_akses(user,menu) VALUES('$user','$menu')");
			}
			else{
				mysqli_query($koneksi,"DELETE FROM hak_akses WHERE user='$user' AND menu='$menu'");
			}
		break;		
		case 'cabang':			
			$nama=$_POST['nama'];						
			$sn=$_POST['sn'];						
			$kode_perusahaan=$_POST['kode_perusahaan'];						
			mysqli_query($koneksi,"INSERT INTO cabang(nama,sn,kode_perusahaan,dibuat,tgl_buat) 
			VALUES('$nama','$sn','$kode_perusahaan','$create_by','$date_create')");
			header("Location: ../../?p=cabang");
		break;
		
		case 'jabatan':			
			$nama=$_POST['nama'];						
			mysqli_query($koneksi,"INSERT INTO jabatan(nama,dibuat,tgl_buat) 
			VALUES('$nama','$create_by','$date_create')");
			header("Location: ../../?p=jabatan");
		break;
		
	}
?>