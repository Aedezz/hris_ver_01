<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>E-Office | Login</title>
  
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/AdminLTE-3.0.2/dist/css/adminlte.min.css">
    
    <!-- Custom styles for this template -->
    
</head>

<script type="text/javascript">
 
  function ceklogin(form){
  	$("#btn-login").addClass("m-progress");
  	var username = form.username.value;
  	var password = form.password.value;
  	var captcha = form.captcha.value;
	
  	if(username=="" || password==""){
  		if(username==""){
  			$("#group-username").addClass("has-error");
  		}
  		if(password==""){
  			$("#group-password").addClass("has-error");
  		}
  		$("#group-feedback").addClass("has-error");
  		$("#help-feedback").html("<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><h5><i class='icon fa fa-ban'></i> Alert!</h5>User Name dan password belum di isi!</div>");
  		$("#btn-login").removeClass("m-progress");
  	}
  	else{
  		$.ajax({
  			type:"POST",
  			data:{username:username, password:password, captcha:captcha},
  			url:"module/kirim/kirim.php?kirim=ceklogin",
  			error: function(jqXHR, textStatus){
  				$("#group-feedback").addClass("has-error");
  					$("#help-feedback").html("<span class='help-block'><b class='text-warning'>ERROR "+jqXHR.status+"</b> : "+ getStatus(jqXHR.status) +"</span>");
  				$("#btn-login").removeClass("m-progress");
  			
	  		},
  			success: function(response){
  				if(response==1){
  					window.location="./";
  				}
				
  				else{
	  				$("#group-feedback").addClass("has-error");
  					$("#help-feedback").html("<span class='help-block'>"+response+"</span>");
  					$("#btn-login").removeClass("m-progress");
  					form.password.value="";
  					form.username.value="";
  					form.username.focus();
  				}
  			}
	  	});
	}
	return false;
  	
  }

</script>

<body class="login-page" style="background-image: url('images/Suzuki Mitra megah.jpg');
     
    background-position: center;
    background-size: 100% 100%;
    background-repeat: no-repeat;">
<div class="login-box">
<div class="card">  
<div class="card-body login-card-body">
<form  class="form-signin" action="#"  onsubmit="return ceklogin(this)" method="POST">
      
<div class="login-logo">
    <img class="mb-1" src="images/mitra.png" alt="" >

  </div>
  
		
			<span id="help-feedback" class="help-block"></span>
		<div class="input-group mb-3">
          <input autofocus="true" type="text" class="form-control" name="username" id="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		
		<div class="input-group mb-3">
          <input class="form-control" type="password" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>	
		
			
		<div class="row">
          <div class="col-4">
		  <div class="form-group">
		  <small>
                <b>Kode Verifikasi</b>
              </small>
		  <img src="asset/capcha/captcha.php" />          
		  </div>
          </div>
          <!-- /.col -->
          <div class="col-8">
		  <label></label>
		  <div class="input-group mb-3">
          <input class="form-control " type="password" id="captcha" name="captcha"  placeholder="Kode Verifikasi">
          <div style="cursor: pointer;" onClick="window.location.reload();" class="input-group-append">
            <div class="input-group-text" style="color:red;">
              <span class="fas fa-sync-alt"></span>
            </div>
          </div>
        </div>				
         
		 </div>          
        </div>
		
			
	
        <div class="social-auth-links text-center mb-3">
		<button id="btn-login"  class="btn btn-primary btn-block" type="submit">Login</button>  
		 
		 </div> 
		 <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
	  <p class="mb-0">
        <a href="register.html" class="text-center">Register a new employee</a>
      </p>
	  
    </form>



</div>
</div>
</div>





<!-- jQuery -->
<script src="asset/AdminLTE-3.0.2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/AdminLTE-3.0.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/AdminLTE-3.0.2/dist/js/adminlte.min.js"></script>


</body>
</html>