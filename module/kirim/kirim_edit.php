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

		case 'divisi':
			$kode = $_POST['kode'];
			$divisi = $_POST['divisi'];
			$manajer = $_POST['manajer'];
			$jabatan = $_POST['jabatan'];
			$email = $_POST['email'];
			$supervisor = $_POST['supervisor'];
			$jabatan_spv = $_POST['jabatan_spv'];
			$email_spv = $_POST['email_spv'];
		
			mysqli_query($koneksi, "UPDATE divisi SET 
				divisi = '$divisi', 
				manajer = '$manajer', 
				jabatan = '$jabatan', 
				email = '$email', 
				supervisor = '$supervisor', 
				jabatan_spv = '$jabatan_spv', 
				email_spv = '$email_spv', 
				diupdate = '$create_by', 
				tgl_diupdate = '$date_create' 
				WHERE kode = '$kode'");
				
			header("Location: ../../?p=divisi");
		break;

		case 'sect':
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];
			
			mysqli_query($koneksi, "UPDATE sect SET 
				nama = '$nama', 
				dibuat = '$create_by', 
				tgl_dibuat = '$date_create',  
				diupdate = '$create_by',
				tgl_update = '$date_create'
				WHERE kode = '$kode'");
			
			header("Location: ../../?p=departemen");
		break;	
		
		case 'barang':
			$id_barang = $_POST['id_barang'];
			$nama_barang = $_POST['nama_barang'];
			
			mysqli_query($koneksi, "UPDATE barang SET 
				nama_barang = '$nama_barang' 
				WHERE id_barang = '$id_barang'");
			
			header("Location: ../../?p=barang");
		break;
		
		case 'item':
			$id_item = $_POST['id_item'];
			$nama_item = $_POST['nama_item'];
			
			mysqli_query($koneksi, "UPDATE item SET 
				nama_item = '$nama_item' 
				WHERE id_item = '$id_item'");
			
			header("Location: ../../?p=item");
		break;
		
		
		default:
			# code...
			break;
	}
?>