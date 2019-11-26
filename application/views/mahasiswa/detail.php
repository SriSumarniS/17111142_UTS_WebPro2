<div class="container">
	<div class="row mt-3">
		<div class="col-md-7">
			<div class="card">
			  <h5 class="card-header">Detail Jadwal Mata Kuliah</h5>
			  <div class="card-body">
			    <h4 class="card-title"><?= $jadwal_matkul['Hari']; ?></h4>
			    <h6 class="card-text"><?= $jadwal_matkul['Nama_Matkul']; ?></h6>
			    <h6 class="card-text"><?= $jadwal_matkul['Nama_Dosen']; ?></h6>
			    <h6 class="card-text"><?= $jadwal_matkul['Ruangan']; ?></h6>
			    <h6 class="card-text"><?= $jadwal_matkul['Kampus']; ?></h6>
			    <h6 class="card-text"><?= $jadwal_matkul['Waktu']; ?></h6>
			    
			    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
			  </div>
			</div>
		</div>
	</div>
</div>