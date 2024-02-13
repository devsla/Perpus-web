<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<!-- link bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
	</script>
	<style>
		body {
			min-height: 100vh;
			display: flex;
			flex-direction: column;
		}

		footer {
			margin-top: auto;
		}

	</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Admin Perpus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url();?>Home">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Menu
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?php echo base_url();?>admin/Buku">Buku</a></li>
							<li><a class="dropdown-item" href="<?php echo base_url();?>admin/Kategori">Kategori</a></li>
							<li><a class="dropdown-item" href="<?php echo base_url();?>admin/Koleksi">koleksi</a></li>
							<li><a class="dropdown-item" href="<?php echo base_url();?>admin/Pinjam">Pinjam</a></li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url();?>Auth/logout">logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
