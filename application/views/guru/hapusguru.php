<!-- Modal Hapus Petugas -->
<div class="modal fade" id="hapusGuruModal" tabindex="-1" role="dialog" aria-labelledby="hapusGuruModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('guru/hapusguru'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
						 <h4 class="text-center text-danger"><b>Hapus Guru!</b></h4>
						 <br>
					  <h5 class="text-center text-danger">Anda yakin ingin menghapus guru ini ?</h5>
					  <input type="hidden" name="hapusidguru" id="hapusidguru" class="form-control">
                    </div>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapus" id="hapusguru">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Hapus Petugas -->