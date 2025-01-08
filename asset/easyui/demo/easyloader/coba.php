<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Basic EasyLoader - jQuery EasyUI Demo</title>
	<!--LOAD file-file yang dibutuhkan-->
    <link rel="stylesheet" type="text/css" href="asset/easyui/demo/demo.css">
    <link rel="stylesheet" type="text/css" href="asset/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="asset/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="asset/easyui/themes/color.css">
   
	
    <script type="text/javascript" src="asset/easyui/jquery.min.js"></script>
    <script type="text/javascript" src="asset/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="../../easyloader.js"></script>
</head>
<body>
	<h2>Basic EasyLoader</h2>
	<div class="demo-info">
		<div class="demo-tip icon-tip"></div>
		<div>Click the buttons below to load components dynamically.</div>
	</div>
	<div style="margin:10px 0;">
		<a href="#" class="easyui-linkbutton" onclick="load1()">Load Calendar</a>
		<a href="#" class="easyui-linkbutton" onclick="load2()">Load Dialog</a>
		<a href="#" class="easyui-linkbutton" onclick="load3()">Load DataGrid</a>
	</div>
	<div id="cc"></div>
	<div id="dd"></div>
	<table id="tt"></table>
	<script type="text/javascript" src="../../easyloader.js"></script>
	<script>
		function load1(){
			using('calendar', function(){
				$('#cc').calendar({
					width:180,
					height:180
				});
			});
		}
		function load2(){
			using(['dialog','messager'], function(){
				$('#dd').dialog({
					title:'Dialog',
					width:300,
					height:200
				});
				$.messager.show({
					title:'info',
					msg:'dialog created'
				});
			});
		}
		function load3(){
			using('datagrid', function(){
				$('#tt').datagrid({
					title:'DataGrid',
					width:300,
					height:200,
					fitColumns:true,
					columns:[[
						{field:'productid',title:'Product ID',width:100},
						{field:'productname',title:'Product Name',width:200}
					]],
					data: [
						{"productid":"FI-SW-01","productname":"Koi"},
						{"productid":"K9-DL-01","productname":"Dalmation"},
						{"productid":"RP-SN-01","productname":"Rattlesnake"},
						{"productid":"RP-LI-02","productname":"Iguana"},
						{"productid":"FL-DSH-01","productname":"Manx"},
						{"productid":"FL-DLH-02","productname":"Persian"},
						{"productid":"AV-CB-01","productname":"Amazon Parrot"}
					]
				});
			});
		}
	</script>

</body>
</html>