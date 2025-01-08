<?php
    include "../../config/config.php";
		
	//mysqli_query($koneksi,"DELETE FROM pendaftaran  WHERE id_arcibaru='$_GET[id]'");

	//header('location:../../?p=member');
   

    // melakukan pengecekan koneksi
   // if ($koneksi->connect_error) {
     //   die("Connection failed: " . $koneksi->connect_error);
    //} 

    //menangkap parameter yang dikirimkan dari detail.php
    $id = $_GET['id'];

    //perintah untuk melakukan hapus
    //melakukan penghapusan data berdasarkan ID
    $sql = "DELETE FROM user WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        //jika  berhasil langsung diarahkan kembali ke file bootstrap.php
        header('location:../../?p=user');
    } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan penghapusan data";
    }

    //$koneksi->close();
?>

