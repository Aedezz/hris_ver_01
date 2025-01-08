<script src="asset/theme/jquery-3.1.1.min.js"></script>
<?php
$bulan=date("m");
$bulan1=date("M");
$tahun=date("Y");
?>

<script type="text/javascript">
            $(function() {
                $('#customers').dataTable( {
					"fixedHeader": {
        header: true,
    },
				//"lengthMenu": [[10, -1], [10, "All"]]
		
    });
            });
        </script>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size:12px;  
}

#customers td, #customers th {
  border-bottom: 1px solid #ddd;
  padding: 2px;
  font-size:12px;
  
}
#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
  border-top: 1px solid #ddd;
  border: 1px solid #ddd;
}
#customers td {
  padding-top: 4px;
  padding-bottom: 4px;
  text-align: left;
   
    border-bottom: 1px solid #ddd;
  border-top: 1px solid #ddd;

 
}
</style>
<style>
      .tableFixHead {
        overflow-y: auto; /* make the table scrollable if height is more than 200 px  */
        height: 250px; /* gives an initial height of 200px to the table */
      }
      .tableFixHead thead th {
        position: sticky; /* make the table heads sticky */
        top: 0px; /* table head will be placed from the top of the table and sticks to it */
      }
      table {
        border-collapse: collapse; /* make the table borders collapse to each other */
        width: 100%;
      }
     
      
      
    </style>
		<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">DASHBOARD</h4>
			
          </div><!-- /.col -->
          
        </div><!-- /.row -->
		
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
	  
	  
        <!-- Info boxes -->
        
	
	
		
      </div>
	  
    </section>
		
