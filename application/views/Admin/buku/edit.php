<div class="container">
	<?php if ($this->session->flashdata() ): ?>
	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading"><strong>Data Berhasil di
				edt</strong><?= $this->session->flashdata('diedit'); ?></h4>
	</div>
</div>
<?php endif;?>
<div class="container">
	<div class="container-fluid ">
		<div class="row justify-content-center align-items-center vh-100">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">edit data</h3>
						<form action="<?php echo base_url();?>admin/Buku/fungsi_edit" method="POST">
							<div class="form-group">
								<label for="BukuID">id</label>
								<input type="text" class="form-control" name="BukuID"
									value="<?= $kategori['BukuID']; ?>" id="BukuID" readonly>
							</div>
							<div class="form-group">
								<label for="Judul">Judul</label>
								<input type="text" class="form-control" name="Judul"
									value="<?= $kategori['Judul']; ?>" id="Judul">
							</div>
							<div class="form-group">
								<label for="Penulis">Penulis</label>
								<input type="text" class="form-control" name="Penulis"
									value="<?= $kategori['Penulis']; ?>" id="Penulis">
							</div>
							<div class="form-group">
								<label for="Penerbit">Penerbit</label>
								<input type="text" class="form-control" name="Penerbit"
									value="<?= $kategori['Penerbit']; ?>" id="Penerbit">
							</div>
							<div class="form-group">
								<label for="Kategori">Kategori</label>
								<input type="text" class="form-control" name="Kategori"
									value="<?= $kategori['Kategori']; ?>" id="Kategori">
							</div>
							<div class="form-group">
								<label for="TahunTerbit">TahunTerbit</label>
								<input type="text" class="form-control" name="TahunTerbit"
									value="<?= $kategori['TahunTerbit']; ?>" id="TahunTerbit">
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="edit" class="btn btn-success btn-lg btn-block">edit
							data</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
