<div class="container">
	<div class="row mt-3">
		<div class="col-md-7">
					
			<div class="card">
				  <div class="card-header">
				    Form Edit Data Jadwal Mata Kuliah
				  </div>
				  <div class="card-body">
				    <form action="" method="post">
				    	<input type="hidden" name="id" value="<?= $jadwal_matkul['id'];  ?>">
				    	<div class="form-group">
						    <label for="hari">Hari</label>
						    <select class="form-control" id="hari" name="hari">
						    	<?php foreach($Hari as $hr) : ?>
							    	<?php if($hr == $jadwal_matkul['Hari']) :?>
							     		<option value="<?= $hr; ?>" selected><?= $hr; ?></option>
							      	<?php else : ?>
							      		<option value="<?= $hr; ?>"><?= $hr; ?></option>
							      	<?php endif; ?>
							    <?php endforeach; ?>
						    </select>
						</div>
				    	<div class="form-group">
				    		<label for="matkul">Nama Mata Kuliah</label>
				    		<input type="text" name="matkul" class="form-control" id="matkul" value="<?= $jadwal_matkul['Nama_Matkul']; ?>">
				    		<small class="form-text text-danger"><?= form_error('matkul'); ?></small>
				    	</div>
				    	<div class="form-group">
				    		<label for="dosen">Dosen</label>
				    		<input type="text" name="dosen" class="form-control" id="dosen" value="<?= $jadwal_matkul['Nama_Dosen']; ?>">
				    		<small class="form-text text-danger"><?= form_error('dosen'); ?></small>
				    	</div>
				    	<div class="form-group">
				    		<label for="ruangan">Ruangan</label>
				    		<input type="text" name="ruangan" class="form-control" id="ruangan" value="<?= $jadwal_matkul['Ruangan']; ?>">
				    		<small class="form-text text-danger"><?= form_error('ruangan'); ?></small>
				    	</div>

				    	<div class="form-group">
						    <label for="kampus">Kampus</label>
						    <select class="form-control" id="kampus" name="kampus">
							    <?php foreach($Kampus as $kmp) : ?>
							    	<?php if($kmp == $jadwal_matkul['Kampus']) :?>
							     		<option value="<?= $kmp; ?>" selected><?= $kmp; ?></option>
							      	<?php else : ?>
							      		<option value="<?= $kmp; ?>"><?= $kmp; ?></option>
							      	<?php endif; ?>
							    <?php endforeach; ?>
						    </select>
						</div>

						<div class="form-group">
				    		<label for="waktu">Waktu</label>
				    		<input type="text" name="waktu" class="form-control" id="waktu" value="<?= $jadwal_matkul['Waktu']; ?>">
				    		<small class="form-text text-danger"><?= form_error('waktu'); ?></small>
				    	</div>
				    	<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
				    </form>	
				  </div>
		</div>
		</div>
	</div>
</div>