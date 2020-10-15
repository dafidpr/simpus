<!-- Modal Hapus Petugas -->
<div class="modal fade" id="cetakPengembalianModal" tabindex="-1" role="dialog" aria-labelledby="cetakPengembalianModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <form action="<?php echo base_url('pengembalian/cetak'); ?>" method="post" class="user">
                <div class="modal-body">
                   <div class="container-fluid">
				    <h4 class="text-center text-success"><i class="fa fa-check-circle-o fa-4x"></i></h4>
				    <br>
					<h4 class="text-center text-success">SUCCESS!</h4>
					<h5 class="text-center">Cetak Bukti Pengembalian ?</h5>
					 <input type="hidden" class="form-control" id="kodepetugas" name="kodepetugas" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
					 <input type="hidden" class="form-control" id="cetaktotal" name="cetaktotal" readonly>
					 <input type="hidden" class="form-control" id="cetakbayar" name="cetakbayar" readonly>
					 <input type="hidden" class="form-control" id="cetakkembali" name="cetakkembali" readonly>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" onclick="batalcetak()" type="button" data-dismiss="modal">Batal</button>
                  <button class="btn btn-success" type="submit" name="cetak" id="cetak"><i class="fa fa-print"></i> Cetak</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Hapus Petugas -->