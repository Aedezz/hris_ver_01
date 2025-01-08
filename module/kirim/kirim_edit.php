<?php 
$create_by=getUser("username",$userID);
$date_create=date("Y-m-d H:i:s");

	switch ($_GET['edit']) {			
		case 'user':
			$iduser=$_POST['iduser'];
			$username=$_POST['username'];
			$nama=$_POST['nama'];					
			$alamat=$_POST['alamat'];					
			$role=$_POST['role'];					
			$jabatan=$_POST['jabatan'];					
			mysqli_query($koneksi,"UPDATE user SET jabatan='$jabatan',alamat='$alamat',role='$role',username='$username',nama='$nama',diupdate='$create_by',tgl_diupdate='$date_create' WHERE id='$iduser'");
			header("Location: ../../?p=user");
		break;
		
		case 'update':
			$id=$_POST['id'];			
			$password=password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12,]);	
			mysqli_query($koneksi,"UPDATE user SET password='$password',diupdate='$create_by',tgl_diupdate='$date_create' WHERE id='$id'");
			header("Location: ../../?p=index");			
			break;
			
		case 'cabang':
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			$sn=$_POST['sn'];
			$kode_perusahaan=$_POST['kode_perusahaan'];
			mysqli_query($koneksi,"UPDATE cabang SET nama='$nama',sn='$sn',kode_perusahaan='$kode_perusahaan',diupdate='$create_by',tgl_update='$date_create' WHERE kode='$kode'");
			header("Location: ../../?p=cabang");
		break;
		
		case 'jabatan':
			$kode=$_POST['kode'];
			$nama=$_POST['nama'];
			mysqli_query($koneksi,"UPDATE jabatan SET nama='$nama',diupdate='$create_by',tgl_update='$date_create' WHERE kode='$kode'");
			header("Location: ../../?p=jabatan");
		break;
		
		default:
			# code...
			break;
	}
?>