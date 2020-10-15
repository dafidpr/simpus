<!-- Modal Input Petugas -->
<div class="modal fade" id="inputKelasModal" tabindex="-1" role="dialog" aria-labelledby="inputKelasModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="inputKelasModal">Input Data Kelas</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url('kelas/inputkelas'); ?>" method="post" class="user">
                <div class="modal-body">
					 <div class="container-fluid">
						<div class="form-group row  mb-3">
							<div class="col-md-12">
							<input type="text" name="kelas" id="kelas" class="form-control " placeholder=" Nama Kelas">
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