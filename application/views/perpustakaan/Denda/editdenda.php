<div class="modal fade" id="editDendaModal" tabindex="-1" role="dialog" aria-labelledby="editDendaModal" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
	<div class="modal-header bg-primary">
	  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	  <h4 class="modal-title text-white" id="inputDendaModal">Edit Denda</h4>
	</div>
	<div class="modal-body">
		<form action="<?php echo base_url('denda/editdenda'); ?>" method="post" class="user">
		  <div class="modal-body">
			 <div class="container-fluid">
				<div class="form-group row  mb-3">
					<div class="col-md-12">
					<input type="hidden" name="iddenda" id="iddenda" class="form-control">
					<input type="text" name="datadenda" id="editdenda" class="form-control " placeholder=" Denda / Buku">
					</div>
				</div>
			</div>
		</div>
		 <div class="modal-footer">
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
			<button class="btn btn-primary" type="submit" name="editdenda" id="btneditdenda">Simpan</button>
		</div>
	  </form>
	</div>
  </div>
</div>
</div>