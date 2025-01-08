<script src="asset/theme/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
$('#DataTables_Table_0').dataTable({
		"order": [[ 0, 'desc' ]],
		 columnDefs: [
    { orderable: false, targets: '_all' }
]
		});

 </script>
 
</head>
 <script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>
  
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <i class="fas fa-map-marker-alt"></i> Cabang</h1>
          </div> 
		<div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-sm btn-outline-danger" onclick="location.href = 'index.php';"><i class="fa fa-reply"></i> Kembali</button>
              <button type="button" onclick="location.href = './?p=cabang&aksi=tambah';" class="btn btn-sm btn-outline-primary"> <i class="fa fa-plus"></i> Tambah</a>                  
				
          </div>
        </div>		  
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="col-12">
                   <h2 class="card-title">Data Cabang</h2>
                    </div>
			  
            </div>
            <!-- /.card-header -->
            <div class="card-body">     
                
          <table id="example" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Sn Att</th>
								<th>Action</th>											
							</tr>
						</thead>
					</table>
            </div>
            <!-- /.card-body -->
          </div>
		
 <script>
	$(document).ready(function(){
		$('#example').DataTable({
			"bProcessing": true,
			"serverSide": true,
			"ajax":{
				url :"module/cabang/dt.php",
				type: "post",				
			},
			'columnDefs': [
				
				
				{
					'targets': 2,
					'searchable': false,
					 'width':60,
					'orderable': false,
					'className': 'text-center',
					'render': function (data, type, full, meta){						
						return '<a type=\"button\" class=\"btn btn-xs btn-outline-primary\" href="?p=cabang&aksi=edit&idcabang='+data+'"><i class="fas fa-edit"></i></a>  <a type=\"button\" class=\"btn btn-xs btn-outline-danger\" onclick="return confirm(\'Apakah data akan dihapus ?\')" href="module/cabang/hapus.php?idcabang='+data+'"><i class="fas fa-trash"></i></a>';
					}
				}
			],
        });  
	} );
</script>

   
  
