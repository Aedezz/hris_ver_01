<?php
	include "../../config/config.php";
		
	$params = $totalRecords = $data = array();
	$params = $_REQUEST;
			
	$where = $sqlTot = $sqlRec = "";
	
	if( !empty($params['search']['value']) ) {   
		$where .=" WHERE ";
		$where .=" kode LIKE '%".$params['search']['value']."%' ";    
		$where .=" OR divisi LIKE '%".$params['search']['value']."%' ";		
	}
		
	$sql = "SELECT divisi, kode FROM divisi";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	
	if(isset($where) && $where != '') {

		$sqlTot .= $where;
		$sqlRec .= $where;
	}
	
	$sqlRec .=  " ORDER BY divisi asc LIMIT ".$params['start']." ,".$params['length']." ";
	
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