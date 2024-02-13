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
						<form action="<?php echo base_url();?>admin/Kategori/fungsi_edit" method="POST">
							<div class="form-group">
								<label for="KategoriID">Kategori</label>
								<input type="text" class="form-control" name="KategoriID"
									value="<?= $kategori['KategoriID']; ?>" id="KategoriID" readonly>
							</div>
							<div class="form-group">
								<label for="NamaKategori">Kategori</label>
								<input type="text" class="form-control" name="NamaKategori"
									value="<?= $kategori['NamaKategori']; ?>" id="NamaKategori">
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
