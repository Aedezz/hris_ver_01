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
            <h1> Admin</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-danger btn-sm" onclick="history.back()"><i class="fa fa-reply"></i> Kembali</button>
              <button type="button" onclick="location.href = './?p=user&aksi=tambah';" class="btn btn-primary btn-sm"><i class="fa fa-book"></i>  Tambah</a>                  
				
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
                   <h2 class="card-title">Data Admin</h2>
                             </div>
			  
            </div>
            <!-- /.card-header -->
            <div class="card-body">     
                
           <table id="example1" class="table table-bordered table-striped">						  
                                    <thead>
                                        <tr>
                                            <th>Id.User</th>
                                            <th>User Name</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jabatan</th>
                                            <th>Level</th>
                                            <th>&nbsp;</th>                                            
                                        </tr>
                                    </thead>
									 <tbody>
									 <?php
								$sql=mysqli_query($koneksi,"SELECT * FROM user where username !='master' and username !='admin' ORDER BY id DESC");
								while($data=mysqli_fetch_array($sql)){
									echo "<tr>
										<td>$data[id]</td>
										<td>$data[username]</td>
										<td>$data[nama]</td>										
										<td>$data[jabatan]</td>										
										<td>$data[level]</td>										
										<td>
										<a class='btn btn-warning btn-xs' href=\"./?p=user&aksi=edit&id=$data[id]\"> <i class='fas fa-edit'></i></a>
										<a class='btn bg-danger btn-xs' data-toggle='modal' data-target='#konfirmasi_hapus' data-href='module/user/hapus.php?id=".$data['id']."'><i class='fas fa-trash'></i></a>
										
										</td>
									</tr>
									";
								}
							?>
									 </tbody>
									 </table>
            </div>
            <!-- /.card-body -->
          </div>
		
 

   <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Anda yakin ingin menghapus data ini ?</b><br><br>
					
                    <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
	

  <script type="text/javascript">
   

    //Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });

  </script>
  
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
  
