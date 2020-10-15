<!-- Modal Input Petugas -->
<div class="modal fade" id="inputWaliKelasModal" tabindex="-1" role="dialog" aria-labelledby="inputWaliKelasModal" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header bg-primary">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title text-white" id="inputWaliKelasModal">Input Data Wali Kelas</h4>
	</div>
	<div class="modal-body">
		<form action="<?php echo base_url('walikelas/inputwalikelas'); ?>" method="post" class="user">
			<div class="modal-body">
				 <div class="container-fluid">
					  <div class="form-group row  mb-3">
						<div class="col-md-12">
						<label class="">Kelas :</label>
						 <select name="kelaswali"  class="form-control">
						    <option value=""></option>
							<?php foreach ($kelaswali as $kelaswali) :?>
							<option value="<?php echo $kelaswali['ID_KELAS']?>"><?php echo $kelaswali['KELAS']?></option>
							<?php endforeach;?>
						 </select>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-12">
						<label class="">Guru :</label>
						 <select name="walikelas"  class="form-control">
						    <option value=""></option>
							<?php foreach($walikelas as $walikelas) :?>
							<option value="<?php echo $walikelas['ID_GURU']?>"><?php echo $walikelas['NAMA_GURU']?></option>
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