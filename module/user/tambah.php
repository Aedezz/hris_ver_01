<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin</h1>
          </div>
          <div class="col-sm-6">
            <div class="float-right">
              <button class="btn btn-danger btn-sm" onclick="location.href = './?p=user';"><i class="fa fa-reply"></i> Kembali</button>
              	
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<div class="row">
        <div class="col-12">
<div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Data Admin</h3>
              </div>
              <div class="card-body">
                <!-- Date range -->
               <form role='form' action='module/kirim/kirim.php?kirim=tambah&tambah=user' method="post">						
                           
                                    <div class="form-group">
									 <label>User Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control float-right" autofocus id="username" name="username" placeholder="User Name" required />
                                        </div>
                                    </div>
									
                                    <div class="form-group">
									 <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control float-right" id="password" name="password" placeholder="Password" required />
                                        </div>
                                    </div>
									
									<div class="form-group">
									 <label>Nama Lengkap</label>
                                       <div class="form-group">
                                            <input type="text" class="form-control float-right" id="nama" name="nama" placeholder="Nama Lengkap" required />
                                        </div>
                                    </div>
									<div class="form-group">
									 <label>Alamat Lengkap</label>
                                       <div class="form-group">
                                            <input type="text" class="form-control float-right" id="alamat" name="alamat" placeholder="Alamat Lengkap" required />
                                        </div>
                                    </div>	
									<div class="form-group">
									 <label>Jabatan</label>
                                       <div class="form-group">
                                            <input type="text" class="form-control float-right" id="jabatan" name="jabatan" placeholder="Jabatan" required />
                                        </div>
                                    </div>	
									
									<div class="form-group">
									<label for='nama'>LEVEL</label>
									<select class="form-control" id="role" name="role">
										<?php
											$sql1 = mysqli_query($koneksi,"SELECT * FROM tb_param where keterangan='role' order by nama");
											while ($data1=mysqli_fetch_array($sql1)) {
											if($data['role']==$data1['nama']){
												echo "<option value='$data1[nama]' selected>$data1[nama]</option>";
											}
											else {
												echo "<option value='$data1[nama]'>$data1[nama]</option>";
											}
											}
										?>										
										</select>								
							</div>
						
                       
                       
              </div>
			   <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                    								
                              
                            </form>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
	

