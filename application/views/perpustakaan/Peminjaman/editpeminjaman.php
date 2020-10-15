<div class="modal fade" id="editPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="editPeminjamanModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editPeminjamanModal">Edit Transaksi Peminjaman</h4>
        </div>
        <div class="modal-body">
        <form action="<?php echo base_url('peminjaman/editdatapeminjaman')?>" method="post" class="user">
           <ul class="list-group list-group-flush">
              <li class="list-group-item">
                 <div class="form-group row  mb-3">
                  <div class="col-md-5">
					 <input type="hidden" class="form-control" name="editidpeminjaman" id="editidpeminjaman">
					 <input type="hidden" class="form-control" name="editiddetilpinjam" id="iddetilpinjam">
				 	 <input type="hidden" class="form-control" name="kodedetilpinjam" id="kodedetilpinjam">
					 <input type="hidden" class="form-control" name="idsiswapinjam" id="editidsiswapinjam">
                   <div class="input-group">
					 <label class="control-label">Kode Siswa :</label>
					 <div class="input-append">
                       <input type="text" class="form-control" name="kodesiswa" aria-label="Search" aria-describedby="basic-addon2" id="editkodesiswapinjam">
                        <span class="input-group-btn add-on">
					     <button class="btn btn-theme" onclick="editcarisiswa()" id="kodesiswa" type="button"><i class="fa fa-search"></i></button>
					    </span>
					 </div>
                   </div>
                  </div>
                   <div class="col-md-3">
				    <input type="hidden" class="form-control" id="idpetugas" name="idpetugaspinjam" value="<?php echo $user['ID_PETUGAS']?>" readonly>
				    <label class="control-label">Kode Petugas :</label>
                      <input type="text" class="form-control" id="kodepetugas" name="kodepetugas" value="<?php echo $user['KODE_PETUGAS']?>" readonly>
                   </div>
                </div>
				 <div class="form-group row">
                   <div class="col-md-4">
				   <label class="control-label">Nama Siswa :</label>
                    <input type="text" name="namasiswa" id="editnamasiswa" class="form-control" readonly>
                    </div>
                 </div>
              </li>
			  <li class="list-group-item">
				   <div class="form-group row  mb-3">
					  <div class="col-md-4">
						<input type="hidden" class="form-control" name="idbuku" id="editidbuku">
					   <div class="input-group">
						 <label class="control-label">Kode Buku :</label>
						 <div class="input-append">
						   <input type="text" class="form-control" name="editkodebuku" aria-label="Search" aria-describedby="basic-addon2" id="editkodebuku">
							<span class="input-group-btn add-on">
							  <button class="btn btn-theme" type="button" onclick="editcaribuku()" id="kodebuku"><i class="fa fa-search"></i></button>
							</span>
						 </div>
					   </div>
					  </div>
					   <div class="col-md-7">
						<label class="control-label">Judul Buku :</label>
						  <input type="text" class="form-control" id="editjudulbuku" name="editjudul" readonly>
					   </div>
					</div>
					  <div class="form-group row  mb-3 mt-3">
					   <div class="col-md-3">
						<label class="control-label">Tanggal Pinjam :</label>
						  <input type="text" class="form-control" id="edittglpinjam" name="edittglpinjam" readonly>
					   </div>
					  </div>
					  <div class="form-group row  mb-3 mt-3">
					    <div class="col-md-3">
					       <label class="control-label">Tanggal Kembali :</label>
						  <input type="date" class="form-control" id="edittglkembali" name="edittglkembali">
					    </div>
					   <div class="col-md-4 pull-right" style="padding-top: 30px; padding-left: 180px;">
						  <button type="button" onclick="editpinjam()" class="btn btn-success btn-sm" id="btnDisable"><i class="fa fa-edit"></i> Edit</button>
					   </div>
					</div>
                </li>
                <li class="list-group-item">
                  <div class="table-responsive">
                  <table class="table table-bordered" id="editlistpinjam" width="100%">
				    <thead class="table-secondary">
					  <tr>
						  <th>KODE BUKU</th>
						  <th>JUDUL BUKU</th>
						  <th>TGL PINJAM</th>
						  <th>TGL KEMBALI</th>
						  <th>OPSI</th>
					  </tr>
					</thead>
				  </table>
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
