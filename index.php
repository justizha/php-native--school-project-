<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    
	<h1>LOGIN</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

	<div class="container">
		<div class="col-lg-8">

			<form action="confirmLogin.php" method="post">
				<label class="form-label">Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
	
	
				<label class="form-label">Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password .." required="required">
	
	
				<input type="submit" class="btn btn-primary text-white " value="LOGIN">
	
	
				<br/>
				<br/>
				
			</form>
		</div>
	</div>
		
	</div> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>