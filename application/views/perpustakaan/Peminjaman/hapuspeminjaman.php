<!-- Modal Hapus Petugas -->
<div class="modal fade" id="hapusPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="hapusPeminjamanModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('peminjaman/hapuspeminjaman'); ?>" method="post" class="user">
                <div class="modal-body">
                   <div class="container-fluid">
				    <h4 class="text-center text-danger"><b>Hapus Data Peminjaman!</b></h4>
				    <br>
					<h5 class="text-center text-danger">Anda yakin ingin menghapus data peminjaman ini ?</h5>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                  <button class="btn btn-danger" type="submit" name="hapus" id="hapuspeminjaman">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Hapus Petugas -->