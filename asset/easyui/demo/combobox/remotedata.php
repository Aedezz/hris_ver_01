<?php
 
		include 'Connections/sdmrsi.php';
 
			$rs = mysql_query ("SELECT MAX(LEFT(NoInduk,3)) as max FROM tbpegawai");
			$rows = array();
			while($row = mysql_fetch_assoc($rs)){
	$rows=$row['max'];
	$nourut=substr($rows,0,3);
	$nourut++;
	$d= date('d');
	$b= date('m');
	$y= date('Y');
	
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Binding to Remote Data - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../../themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../demo.css">
	<script type="text/javascript" src="../../jquery.min.js"></script>
	<script type="text/javascript" src="../../jquery.easyui.min.js"></script>
</head>
<body>
	<h2>Binding to Remote Data</h2>
	<p>The ComboBox is bound to a remote data.</p>
	<div style="margin:20px 0"></div>
	<input class="easyui-combobox" 
			name="language"
			data-options="
					url:'cobainduk.php',
					method:'get',
					valueField:'$nourut',
					textField:'$nourut',
					panelHeight:'auto'
			">

</body>
</html>