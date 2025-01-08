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
            <h1> <i class="fas fa-server"></i> Departemen</h1>
          </div> 
		<div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-sm btn-outline-danger" onclick="location.href = 'index.php';"><i class="fa fa-reply"></i> Kembali</button>
              <button type="button" onclick="location.href = './?p=departemen&aksi=tambah';" class="btn btn-sm btn-outline-primary"> <i class="fa fa-plus"></i> Tambah</a>                  
				
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
                   <h2 class="card-title">Data Departemen</h2>
                    </div>
			  
            </div>
            <!-- /.card-header -->
            <div class="card-body">     
                
          <table id="example" class="table table-bordered table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Nama Departemen</th>
								<th>Action</th>											
							</tr>
						</thead>
					</table>
            </div>
            <!-- /.card-body -->
          </div>

<!-- Include SweetAlert Library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
        "bProcessing": true,
        "serverSide": true,
        "ajax": {
            url: "module/departemen/dt.php",
            type: "post",
        },
        'columnDefs': [
            {
                'targets': 1,
                'searchable': false,
                'width': 60,
                'orderable': false,
                'className': 'text-center',
                'render': function(data, type, full, meta) {
                    return `
                        <a type="button" class="btn btn-xs btn-outline-primary" href="?p=departemen&aksi=edit&kode=${data}">
                            <i class="fas fa-edit"></i>
                        </a>  
                        <button type="button" class="btn btn-xs btn-outline-danger btn-delete" data-id="${data}">
                            <i class="fas fa-trash"></i>
                        </button>`;
                }
            }
        ],
    });

    // SweetAlert Delete Confirmation
    $(document).on('click', '.btn-delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        var deleteUrl = `module/departemen/hapus.php?kode=${id}`;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform the deletion
                $.ajax({
                    url: deleteUrl,
                    type: 'GET', // Adjust this to your HTTP method (e.g., POST)
                    success: function(response) {
                        // Show success message
                        Swal.fire({
                            toast: true,
                            position: 'top-right',
                            icon: 'success',
                            title: 'Data berhasil dihapus',
                            showConfirmButton: false,
                            timer: 3000
                        });

                        // Refresh the DataTable
                        $('#example').DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        // Handle error if the deletion fails
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    }
                });
            }
        });
    });
});
</script>