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

		case 'divisi':			
			$divisi = $_POST['divisi'];	
			$manajer = $_POST['manajer'];	
			$jabatan = $_POST['jabatan'];	
			$email = $_POST['email'];	
			$supervisor = $_POST['supervisor'];	
			$jabatan_spv = $_POST['jabatan_spv'];  // Fixed spelling
			$email_spv = $_POST['email_spv'];
		
			// Ensure the number of values matches the columns
			mysqli_query($koneksi, "INSERT INTO divisi(
				divisi,
				dibuat,
				tgl_buat,
				diupdate,
				tgl_diupdate,
				manajer,
				email,
				jabatan,
				supervisor,
				email_spv,
				jabatan_spv
			) VALUES (
				'$divisi',
				'$create_by',
				'$date_create',
				'$create_by',
				'$date_create',
				'$manajer',
				'$email',
				'$jabatan',
				'$supervisor',
				'$email_spv',
				'$jabatan_spv'
			)");
		
			// Redirect after successful insertion
			header("Location: ../../?p=divisi");
		break;
		
		case 'sect':			
			$nama = $_POST['nama'];
			
			mysqli_query($koneksi, "INSERT INTO sect (
				nama, 
				dibuat, 
				tgl_dibuat, 
				diupdate, 
				tgl_update
			) VALUES (
				'$nama', 
				'$create_by', 
				'$date_create', 
				'$create_by', 
				'$date_create'
			)");
			
			header("Location: ../../?p=departemen");
		break;		

		case 'barang':			
			$nama_barang = $_POST['nama_barang'];
			
			mysqli_query($koneksi, "INSERT INTO barang (
				nama_barang
			) VALUES (
				'$nama_barang'
			)");
			
			header("Location: ../../?p=barang");
		break;	
		
		case 'item':			
			$nama_item = $_POST['nama_item'];
			
			mysqli_query($koneksi, "INSERT INTO item (
				nama_item
			) VALUES (
				'$nama_item'
			)");
			
			header("Location: ../../?p=item");
		break;	
		
	}
?>