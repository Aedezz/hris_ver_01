<?php
switch ($_POST['tabel']) {
		case 'biaya_dtl':			
			mysqli_query($koneksi,"DELETE FROM tb_daftar_sub_det_item where id_item='$_POST[id]'");
		break;
		case 'biaya_dtl_baku':			
			mysqli_query($koneksi,"DELETE FROM tb_daftar_det_baku where id_baku='$_POST[id]'");
		break;
		case 'lhu_dtl':			
			mysqli_query($koneksi,"DELETE FROM tb_lhu_detail where id_detail='$_POST[id]'");
		break;
		case 'lhu_dtl_ket':			
			mysqli_query($koneksi,"DELETE FROM tb_lhu_subdetail where id_baku='$_POST[id]'");
		break;
			
}
?>