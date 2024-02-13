<div class="container">
	<?php if ($this->session->flashdata() ): ?>
	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading"><strong>Data Berhasil di
				tambahkan</strong><?= $this->session->flashdata('ditambahkan'); ?></h4>
	</div>
</div>
<?php endif;?>
<div class="container">
	<div class="container-fluid ">
		<div class="row justify-content-center align-items-center vh-100">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Tambah data</h3>
						<form action="<?php echo base_url();?>admin/Kategori/tambah" method="POST">
							<div class="form-group">
								<label for="NamaKategori">Kategori</label>
								<input type="text" class="form-control" name="NamaKategori" id="NamaKategori">
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" name="tambah" class="btn btn-success btn-lg btn-block">tambah
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
