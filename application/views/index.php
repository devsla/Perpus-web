<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!-- link css -->
	<link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
	<section class="vh-100">
		<div class="container py-5 h-100">
			<div class="row d-flex align-items-center justify-content-center h-100">
				<div class="col-md-8 col-lg-7 col-xl-6">
					<img src="<?= base_url();?>/assets/bootstrap/img/web-perpus.svg" class="img-fluid"
						alt="Phone image">
				</div>
				<div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
					<h3>FORM LOGIN</h3>

					<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

					<form action="<?= base_url('Login');?>" method="POST">
						<div class="form-outline mb-4">
							<input type="Username" id="Username" name="Username" class="form-control form-control-lg" />
							<label class="form-label">Username</label>
						</div>
						<div class="form-outline mb-4">
							<input type="Password" id="Password" name="Password" class="form-control form-control-lg" />
							<label class="form-label">Password</label>
						</div>
						<div class="text-center text-lg-start mt-4 pt-2">
							<button type="submit" value="Login" class="btn btn-primary btn-lg"
								style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
							<p class="small fw-bold mt-2 pt-1 mb-0">Dont have account?<a
									href="<?= base_url('Register/index');?>">Daftar</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>

	</section>
</body>

</html>
