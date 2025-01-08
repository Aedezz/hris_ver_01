<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-plus"></i> Tambah Jabatan</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-sm btn-outline-danger" onclick="location.href = './?p=jabatan';"><i class="fa fa-reply"></i> Kembali</button>
             		
          </div>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
	<div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Form Isi Data
              </h3>
            </div>
            <!-- /.card-header -->
			<form role='form' action='module/kirim/kirim.php?kirim=tambah&tambah=jabatan' method="post">
            <div class="card-body">
			<div class="row">
			<div class="col-sm-4">
			<div class="form-group">
                    <label>Nama jabatan</label>
                   <div class="form-group">
                     <input autofocus type="text" class="form-control float-right form-control-sm" id="nama" name="nama"  placeholder="Nama jabatan" required />
					</div>
                  </div>
			</div> 
			 
			  
			           
			</div>
			
			
		
		
		</div>
		  <div class="card-footer">
                  <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                 	</div>
                    								
                              
                            </form>
        </div>
        <!-- /.col-->
      </div>
      </div>
	  
	
	

