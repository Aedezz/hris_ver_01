<?php
switch ($_GET['p']) {
case 'update':     
            $user=$idUser;
            $menu="update";
            $cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
            if($cekmenu==1){        
                include "module/user/update.php";
            }
            else{
                include "noakses.php";
            }               
break;	
case 'user':  
	$user=$idUser;
	$menu="user";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/user/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/user/tambah.php";
		}
		else{
			include "module/user/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;		
case 'hakakses':
            $user=$idUser;
            $menu="hakakses";
            $cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
            if($cekmenu==1){  
                include "module/hakakses/tampil.php";
            }
            else{
                include "noakses.php";
            }  
            break;
			case 'laporan': 
				include "module/laporan/laporan.php";
			break;
			
//TAMBAH AKSES MENU 
case 'cabang':  
	$user=$idUser;
	$menu="cabang";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/cabang/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/cabang/tambah.php";
		}		
		else{
			include "module/cabang/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	
//TAMBAH TABEL FORM JABATAN
case 'jabatan':  
	$user=$idUser;
	$menu="jabatan";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/jabatan/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/jabatan/tambah.php";
		}		
		else{
			include "module/jabatan/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	

case 'divisi':  
	$user=$idUser;
	$menu="divisi";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/divisi/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/divisi/tambah.php";
		}		
		else{
			include "module/divisi/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	

case 'departemen':  
	$user=$idUser;
	$menu="departemen";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/departemen/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/departemen/tambah.php";
		}		
		else{
			include "module/departemen/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	

case 'barang':  
	$user=$idUser;
	$menu="barang";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/barang/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/barang/tambah.php";
		}		
		else{
			include "module/barang/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	

case 'item':  
	$user=$idUser;
	$menu="item";
	$cekmenu=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM hak_akses WHERE user='$user' AND menu='$menu'"));
	if($cekmenu==1)
	{ 		                    
		if($_GET['aksi']=='edit'){
			include "module/item/edit.php";
		}
		else if($_GET['aksi']=='tambah'){
			include "module/item/tambah.php";
		}		
		else{
			include "module/item/tampil.php";
		} 
}
	else{
		include "noakses.php";
	}
break;	

//TAMBAH DEFAULT MENU 	
default:			           
	include "module/dashboard/tampil.php";
	break;
}	 
?>

