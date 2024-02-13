<div class="container py-4">
	<div class="container-fluid vh-100">
		<div class="row">
			<div class="col-sm-6 mb-3 mb-sm-0">
				<div class="card" style="width: 18rem;">
					<div class="card-body">
						<form action="<?= base_url('Pinjam/Pinjam');?>">
							<h5 class="card-title">Pinjam Buku</h5>
							<select class="form-select" aria-label="Default select example">
							<option selected>Open this select menu</option>
								<?php foreach ($buku as $bk):?>
								<option value="<?= $bk['BukuID'];?>"><?= $bk['Judul'];?></option>
								<option value="2">Two</option>
								<option value="3">Three</option>
								<?php endforeach;?>
							</select>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
