<?php
	include "../../config/config.php";
		
	$params = $totalRecords = $data = array();
	$params = $_REQUEST;
			
	$where = $sqlTot = $sqlRec = "";
	
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" id_item LIKE '%".$params['search']['value']."%' ";    
		$where .=" OR nama_item LIKE '%".$params['search']['value']."%' ";		
	}
		
	$sql = "SELECT nama_item, id_item FROM item";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}
	
	$sqlRec .=  " ORDER BY nama_item asc LIMIT ".$params['start']." ,".$params['length']." ";
	
	$queryTot = mysqli_query($koneksi, $sqlTot) or die("database error: " . mysqli_error($koneksi));

	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($koneksi, $sqlRec) or die(mysqli_error($koneksi));

	while($row=mysqli_fetch_row($queryRecords)) { 
		$data[] = $row;
	}	

	$json_data = array(
		"draw"            => intval( $params['draw'] ),   
		"recordsTotal"    => intval( $totalRecords ),  
		"recordsFiltered" => intval($totalRecords),
		"data"            => $data 
	);

	echo json_encode($json_data); 
?>