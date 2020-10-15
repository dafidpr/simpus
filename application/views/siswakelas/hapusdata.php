<!-- Modal Hapus Petugas -->
<div class="modal fade" id="hapusDataModal" tabindex="-1" role="dialog" aria-labelledby="hapusDataModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('siswakelas/hapusdata'); ?>" method="post" class="user">
                <div class="modal-body">
                     <div class="container-fluid">
						 <h4 class="text-center text-danger"><b>Hapus Siswa & Kelas!</b></h4>
						 <br>
					  <h5 class="text-center text-danger">Anda yakin ingin menghapus data ini ?</h5>
					  <input type="hidden" name="hapusidguru" id="hapusidguru" class="form-control">
                    </div>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit" name="hapus" id="hapusdata">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Hapus Petugas -->