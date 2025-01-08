<script src="asset/AdminLTE-3.0.2/plugins/jquery/jquery.min.js"></script>
<?php
  $sql=mysqli_query($koneksi,"SELECT * FROM user WHERE id='$idUser'");
  $data=mysqli_fetch_array($sql);
?>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('#password').attr('type','text');
			}else{
				$('#password').attr('type','password');				
			}
		});
	});
</script>


<<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rubah Password</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<div class="row">
        <div class="col-12">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form </h3>
              </div>
              <div class="card-body">
					<form role='form' action='module/kirim/kirim.php?kirim=edit&edit=update' method="post">
						<div class="row">
						<div class="col-sm-6 col-xs-12">
						<div class="form-group">							
							<input type="hidden" class="form-control" id="id" name="id" placeholder="Supplier" maxlength="112" required="" readonly="" value="<?php echo $data['id'] ?>" />
						</div>
						</div>
						</div>
						<div class="row">
						
							
							<div class="col-sm-6 col-xs-12">
								
                				<div class="form-group">
                  					<label for='password'>Password :</label>
                  					<input type="password" class="form-control" id="password" name="password" placeholder="Password" maxlength="12" required="required" />
                				</div>
                				<input type="checkbox" class="form-checkbox"> Tampilkan password
								
							</div>
						</div>
						
						<button class="btn btn-primary"> Rubah Password</button>
					</form>
				</div>
				</div>
			</div>
			</div>
		
		