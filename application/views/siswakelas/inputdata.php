<!-- Modal Input Petugas -->
<div class="modal fade" id="inputDataModal" tabindex="-1" role="dialog" aria-labelledby="inputDataModal" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header bg-primary">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title text-white" id="inputDataModal">Input Data Siswa & Kelas</h4>
	</div>
	<div class="modal-body">
		<form action="<?php echo base_url('siswakelas/inputdata'); ?>" method="post" class="user">
			<div class="modal-body">
				 <div class="container-fluid">
					  <div class="form-group row  mb-3">
						<div class="col-md-12">
						<label class="">Kelas :</label>
						 <select name="kelas"  class="form-control">
						    <option value=""></option>
							<?php foreach ($kelas as $kelas) :?>
							<option value="<?php echo $kelas['ID_KELAS']?>"><?php echo $kelas['KELAS']?></option>
							<?php endforeach;?>
						 </select>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-12">
						<label class="">Siswa :</label>
						 <select name="siswa"  class="form-control">
						    <option value=""></option>
							<?php foreach($siswa as $siswa) :?>
							<option value="<?php echo $siswa['ID_SISWA']?>"><?php echo $siswa['NAMA_LNGKP']?></option>
							<?php endforeach;?>
						 </select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			   <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
			   <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
			</div>
		</form>
	  </div>
   </div>
</div>
</div>