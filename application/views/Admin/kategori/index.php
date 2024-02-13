<div class="container py-2">
	<?php if ($this->session->flashdata() ): ?>
	<div class="alert alert-danger" role="alert">
		<h4 class="alert-heading"><strong>Data Berhasil di
				dihapus</strong><?= $this->session->flashdata('dihapus'); ?></h4>
	</div>
</div>
<?php endif;?>
<div class="container-fluid">
	<nav aria-label="breadcrumb">
		<h1>Data Kelas</h1>
	</nav>
	<div class="card mt-4">
		<div class="card-header">
			<a href="<?= base_url('');?>admin/Kategori/hal" class="btn btn-primary btn-sm">tambah</a>
		</div>

		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kategori</th>
						<th>action</th>
					</tr>
				</thead>

				<?php 
					$count = 0;
					foreach ($sql  as $ks):
					$count = $count + 1;
					?>
				<tbody>
					<tr>
						<td><?= $count ?></td>
						<td><?php echo $ks['NamaKategori']; ?></td>
						<td>
							<a href="<?= base_url('admin/Kategori/hal_edit/');?><?= $ks['KategoriID']?>"
								class="btn btn-success btn-sm">edit</a>
							<a href="<?= base_url('admin/Kategori/delete/'); ?><?= $ks['KategoriID']?>"
								class="btn btn-danger btn-sm"
								onclick="return confirm('yakin ingin menghapus ini?');">hapus</a>
						</td>
					</tr>
				</tbody>
				<?php endforeach;?>
			</table>
		</div>
	</div>
</div>
</div>
