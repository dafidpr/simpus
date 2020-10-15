<!-- Modal Hapus Petugas -->
<div class="modal fade" id="cetakPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="cetakPeminjamanModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('peminjaman/cetak'); ?>" method="post" class="user">
                <div class="modal-body">
                   <div class="container-fluid">
				    <h4 class="text-center text-success"><i class="fa fa-check-circle-o fa-4x"></i></h4>
				    <br>
					<h4 class="text-center text-success">SUCCESS!</h4>
					<h5 class="text-center">Cetak Bukti Peminjaman ?</h5>
					 <input type="hidden" class="form-control" id="kodepetugas" name="kodepetugas" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" onclick="batal()" type="button" data-dismiss="modal">Batal</button>
                  <button class="btn btn-success" type="submit" name="cetak" id="cetak"><i class="fa fa-print"></i> Cetak</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Hapus Petugas -->