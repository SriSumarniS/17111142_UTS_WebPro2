<div class="container">

<?php if($this->session->flashdata('flash')) : ?>
<div class="row mt-3">
	<div class="col-md-6">
		<div class="alert alert-success alert-dismissible fade show" role="alert">
	  		Data jadwal mata kuliah <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
	 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    		<span aria-hidden="true">&times;</span>
	  		</button>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="row mt-3">
	<div class="col-md-7">
		<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Jadwal Mata Kuliah</a>
	</div>
</div>
	<div class="row mt-4">
		<div class="col-md-7">
			<h3>Jadwal Mata Kuliah</h3>
			<ul class="list-group">
				<?php foreach($jadwal_matkul as $mhs): ?>
					<li class="list-group-item"><?=$mhs['Hari']; ?>
						<a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-warning float-right" >Edit</a>
						<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin akan dihapus ?');">Hapus</a>
						<a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-dark float-right" >Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>