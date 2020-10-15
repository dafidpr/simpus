<div class="modal fade" id="editKembaliModal" tabindex="-1" role="dialog" aria-labelledby="editKembaliModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editKembaliModal">Edit Transaksi Pengembalian</h4>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('pengembalian/inputdatakembali')?>" method="post" class="user">
               <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <div class="form-group row  mb-3">
                    <div class="col-md-5">
					 <input type="hidden" class="form-control" name="idtransaksikembali" id="editidtransaksi">
						<div class="input-group">
						   <label class="control-label">No. Transaksi :</label>
						 <div class="input-append">
						    <input type="text" class="form-control" name="kodetransaksi" aria-label="Search" aria-describedby="basic-addon2" id="editkodetransaksi">
							 <span class="input-group-btn add-on">
							 <button class="btn btn-theme" type="button" onclick="caridata()" id="kodetransaksi"><i class="fa fa-search"></i></button>
							</span>
						 </div>
					   </div>
                  </div>
                   <div class="col-md-3">
				      <input type="hidden" class="form-control" id="idpetugaskembali" name="idpetugaskembali" value="<?php echo $user['ID_PETUGAS']?>" readonly>
				      <label class="control-label">Kode Petugas :</label>
                      <input type="text" class="form-control" id="kodepetugas" name="kodepetugas" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-md-5">
				      <input type="hidden" name="idsiswakembali" id="editidsiswakembali" class="form-control" readonly>
				      <label class="control-label">Kode Siswa :</label>
                      <input type="text" name="kodesiswa" id="editkodesiswakembali" class="form-control" readonly>
                    </div>
                 </div>
				 <div class="form-group row">
                   <div class="col-md-5">
				     <label class="control-label">Nama Siswa :</label>
                     <input type="text" name="namasiswa" id="editnamasiswakembali" class="form-control" readonly>
                    </div>
                 </div>
              </li>
			  <li class="list-group-item">
				<div class="table-responsive">
                  <table class="table table-bordered" id="listeditkembali" width="100%">
				    <thead class="table-secondary">
					  <tr>
						  <th>KODE BUKU</th>
						  <th>JUDUL</th>							  
						  <th>DENDA</th>
						  <th>OPSI</th>
					  </tr>
					</thead>
				  </table>
				 </div>
                </li>
                <li class="list-group-item">
                  <div class="form-group row  mb-3 mt-3">
                    <div class="col-md-3">
					   <label class="control-label">Total Denda :</label>
                       <input type="text" class="form-control" id="totaldenda" name="denda" readonly>
                    </div>
                    <div class="col-md-3">
					   <label class="control-label">Bayar :</label>
                       <input type="text" class="form-control" id="bayar" name="bayar" >
                    </div>
					<div class="col-md-4">
					   <label class="control-label">Kembali :</label>
                       <input type="text" class="form-control" id="kembali" name="kembali" >
                    </div>
					<div class="col-md-2 mt">
				      <button type="button" onclick="bayardendakembali()" class="btn btn-success btn-sm" id="bayardenda"><i class="fa fa-check"></i> Bayar</button>
                   </div>
                  </div>
                </li>
			  </ul>
				<div class="modal-footer">
				 <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				 <button class="btn btn-primary" type="submit">Simpan</button>
               </div>
            </form>
           </div>
         </div>
       </div>
     </div>
<!-- End Transaksi Pengembalian Modal -->

