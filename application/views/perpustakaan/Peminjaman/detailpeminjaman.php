<!-- Modal Detail Peminjaman -->
<div class="modal fade" id="DetailPeminjamanModal" tabindex="-1" role="dialog" aria-labelledby="DetailPeminjamanModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="DetailPeminjamanModal">Detail Peminjaman</h4>
        </div>
        <div class="modal-body">
			<div class="table-responsive">
			 <table class="table table-bordered table-striped col-sm-12" width="100%">
				<thead class="table-secondary">
					<th>
					  <small class="text-dark font-weight-bold">KODE DETAIL</small> 
					</th>
					<th scope="col">
					  <small class="text-dark font-weight-bold">KODE PEMINJAMAN</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">KODE BUKU</small> 
					</th>
					<th scope="col">
					  <small class="text-dark font-weight-bold">JUDUL BUKU</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">PEMINJAM</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">PETUGAS</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">JUMLAH</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">TGL PINJAM</small> 
					</th>
					<th scope="col">
					 <small class="text-dark font-weight-bold">TGL KEMBALI</small> 
					</th>
				  </thead>
				  <tbody id="detailpeminjaman">
				  </tbody>
			   </table>
			 </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
 
<!-- End Modal Detail Pengembalian  -->