<?php
  $sql=mysqli_query($koneksi,"SELECT * FROM cabang WHERE kode='$_GET[idcabang]'");
  $data=mysqli_fetch_array($sql);
?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-edit"></i> Koreksi Cabang</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-sm btn-outline-danger" onclick="location.href = './?p=cabang';"><i class="fa fa-reply"></i> Kembali</button>
             	
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
                Form Koreksi Data
              </h3>
            </div>
            <!-- /.card-header -->
			<form role='form' action='module/kirim/kirim.php?kirim=edit&edit=cabang' method="post">
            <div class="card-body">
			<div class="row">
			<div class="col-sm-4">
			<div class="form-group">
                    <label>Nama Cabang</label>
                   <div class="form-group">
                     <input autofocus type="text" class="form-control float-right form-control-sm" id="nama" name="nama"  placeholder="Nama Cabang" required value="<?=$data['nama']?>"/>
                     <input hidden="true" class="form-control float-right form-control-sm" id="kode" name="kode" value="<?=$data['kode']?>" />
					</div>
                  </div>
			</div>  
			 	<div class="col-sm-3">
			<div class="form-group">
                    <label>Sn Att</label>
                   <div class="form-group">
                     <input type="text" class="form-control float-right form-control-sm" id="sn" name="sn"  placeholder="SN ATT" value="<?=$data['sn']?>" />
					</div>
                  </div>
			</div>  
			  <div class="col-sm-3">
			<div class="form-group">
                    <label>Kode Perusahaan</label>
                   <div class="form-group">
                     <select class="form-control form-control is-warning form-control-sm" name="kode_perusahaan" id="kode_perusahaan">
						<option value="0">Pilih Perusahaan</option>
											
						<?php
							$sql1 = mysqli_query($koneksi,"SELECT * FROM parameter where jenis='cPerusahaan'");
							while ($data1=mysqli_fetch_array($sql1)) {
							if($data['kode_perusahaan']==$data1['kode']){
							echo "<option value='$data1[kode]' selected>$data1[nama]</option>";
							}
							else {
							echo "<option value='$data1[kode]'>$data1[nama]</option>";
							}
							}
						?>
						
					</select> 
					
					
					</div>
                  </div>
			</div>          
			</div>
			
			
		
		
		</div>
		  <div class="card-footer">
                  <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i>  Update</button>
                </div>
                    								
                              
                            </form>
        </div>
        <!-- /.col-->
      </div>
      </div>
	  
	
	


	  
	
	



	


