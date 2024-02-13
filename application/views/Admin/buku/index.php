<div class="container py-2">
	<?php if ($this->session->flashdata() ): ?>
	<div class="alert alert-danger" role="alert">
		<h4 class="alert-heading"><strong>Data Berhasil di
				dihapus</strong><?= $this->session->flashdata('dihapus'); ?></h4>
	</div>
</div>
<?php endif;?>

<div class="container">
	<div class="container-fluid">
		<nav aria-label="breadcrumb">
			<h1>Data Buku</h1>
		</nav>
		<div class="card mt-4">
			<div class="card-header">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
					tambah data
				</button>
			</div>

			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>id</th>
							<th>Judul</th>
							<th>Nama Penulis</th>
							<th>Penerbit</th>
							<th>Kategori</th>
							<th>Tahun terbit</th>
							<th>action</th>
						</tr>
					</thead>

					<?php 
					$count = 0;
					$sql = $this->db->query('SELECT * FROM buku,kategoribuku')->result_array();
					foreach ($sql  as $bk):
					$count = $count + 1;
					?>
					<tbody>
						<tr>
							<td><?= $count++ ?></td>
							<td><?php echo $bk['BukuID']; ?></td>
							<td><?php echo $bk['Judul']; ?></td>
							<td><?php echo $bk['Penulis']; ?></td>
							<td><?php echo $bk['Penerbit']; ?></td>
							<td><?php echo $bk['NamaKategori']; ?></td>
							<td><?php echo $bk['TahunTerbit']; ?></td>
							<td>
								<a href="<?= base_url('admin/Buku/index/');?><?= $bk['BukuID']?>"
									class="btn btn-success btn-sm">edit</a>
								<a href="<?= base_url('admin/Buku/delete/'); ?><?= $bk['BukuID']?>"
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
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Buku</h1>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('admin/Buku/tambah') ?>" method="POST">
					<div class="mb-3">
						<label for="Judul">Judul</label>
						<input type="text" class="form-control" name="Judul" id="Judul">
					</div>
					<div class="mb-3">
						<label for="Penulis">Penulis</label>
						<input type="text" class="form-control" name="Penulis" id="Penulis">
					</div>
					<div class="mb-3">
						<label for="Penerbit">Penerbit</label>
						<input type="text" class="form-control" name="Penerbit" id="Penerbit">
					</div>
					<select class="form-select" aria-label="Default select example" name="NamaKategori">
						<option selected>Pilih Kategori</option>
						<?php foreach($select as $s):?>
						<option value="<?= $s['NamaKategori']; ?>"><?= $s['NamaKategori']; ?></option>
						<?php endforeach;?>
					</select>
					<div class="mb-3">
						<label for="TahunTerbit">TahunTerbit</label>
						<input type="date" class="form-control" name="TahunTerbit" id="TahunTerbit" readonly>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" name="tambah" class="btn btn-success">tambah
					data</button>
			</div>
			</form>
		</div>
	</div>
</div>
