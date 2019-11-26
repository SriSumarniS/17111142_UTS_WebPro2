<div class="container">
	<div class="row mt-3">
		<div class="col-md-7">
					
			<div class="card">
				  <div class="card-header">
				    Form Tambah Data Jadwal Mata Kuliah
				  </div>
				  <div class="card-body">
				    <form action="" method="post">
				    	<div class="form-group">
						    <label for="hari">Hari</label>
						    <select class="form-control" id="hari" name="hari">
						      <option value="Senin">Senin</option>
						      <option value="Selasa">Selasa</option>
						      <option value="Rabu">Rabu</option>
						      <option value="Kamis">Kamis</option>
						      <option value="Jumat">Jumat</option>
						      <option value="Sabtu">Sabtu</option>
						      <option value="Minggu">Minggu</option>
						    </select>
						</div>
				    	<div class="form-group">
				    		<label for="matkul">Nama Mata Kuliah</label>
				    		<input type="text" name="matkul" class="form-control" id="matkul">
				    		<small class="form-text text-danger"><?= form_error('matkul'); ?></small>
				    	</div>
				    	<div class="form-group">
				    		<label for="dosen">Dosen</label>
				    		<input type="text" name="dosen" class="form-control" id="dosen">
				    		<small class="form-text text-danger"><?= form_error('dosen'); ?></small>
				    	</div>
				    	<div class="form-group">
				    		<label for="ruangan">Ruangan</label>
				    		<input type="text" name="ruangan" class="form-control" id="ruangan">
				    		<small class="form-text text-danger"><?= form_error('ruangan'); ?></small>
				    	</div>
				    	<div class="form-group">
						    <label for="kampus">Kampus</label>
						    <select class="form-control" id="kampus" name="kampus">
						      <option value="1">1</option>
						      <option value="3">3</option>
						    </select>
						</div>
						<div class="form-group">
				    		<label for="waktu">Waktu</label>
				    		<input type="text" name="waktu" class="form-control" id="waktu">
				    		<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
				    	</div>
				    	<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				    </form>	
				  </div>
		</div>
		</div>
	</div>
</div>