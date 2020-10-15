<!-- Modal Input Petugas -->
<div class="modal fade" id="detailBukuModal" tabindex="-1" role="dialog" aria-labelledby="detailBukuModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="detailBukuModal">Detail Data Buku</h4>
        </div>
        <div class="modal-body">
		<form class="user" id="detaildatabuku">
			<div class="modal-body">
				 <div class="container-fluid">
					<div class="form-group row  mb-3">
						<div class="col-md-6">
							<label for="detilidbuku">Kode Buku :</label>
							<input type="text" name="idbuku" id="detilidbuku" class="form-control" readonly>
						</div>
						<div class="col-md-6">
							<label for="detiljudul">Judul Buku :</label>
							<input type="text" name="judul" id="detiljudul" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
							<label for="detilthnTerbit">Tahun Terbit :</label>
							<input type="text" name="thnTerbit" id="detilthnTerbit" class="form-control" readonly>
						</div>
						<div class="col-md-6">
							<label for="detilpenulis">Penulis :</label>
							<input type="text" name="penulis" id="detilpenulis" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-6">
							<label for="detilpenerbit">Penerbit :</label>
							<input type="text" name="penerbit" id="detilpenerbit" class="form-control" readonly>
						</div>
						<div class="col-md-6">
							<label for="detiltmptTerbit">Tempat Terbit :</label>
							<input type="text" name="tmptTerbit" id="detiltmptTerbit" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-4">
							<label for="detilisbn">ISBN :</label>
							<input type="text" name="isbn" id="detilisbn" class="form-control" readonly>
						</div>
						<div class="col-md-4">
							 <label for="detilhalaman">Halaman :</label>
							<input type="number" name="halaman" id="detilhalaman" class="form-control" readonly>
						</div>
						<div class="col-md-4">
							<label for="detilberat">Berat:</label>
							<input type="number" name="berat" id="detilberat" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row  mb-3">
						<div class="col-md-4">
							<label for="detilcetakan">Cetakan :</label>
							<input type="number" name="cetakan" id="detilcetakan" class="form-control" readonly>
						</div>
						<div class="col-md-4">
							<label for="detilukuran">Ukuran :</label>
							<input type="text" name="ukuran" id="detilukuran" class="form-control" readonly>
						</div>
						<div class="col-md-4">
							<label for="detiljmlBuku">Jumlah Buku :</label>
							<input type="number" name="jmlBuku" id="detiljmlBuku" class="form-control" readonly>
						</div>
					</div>
					<div class="form-group row mb-3">
					  <div class="col-md-12">
						   <label for="detilkategori">Kategori :</label>
						  <input type="text" name="kategori" id="detilkategori" class="form-control" readonly>
					   </div>
					</div>
				</div>
			 </div>
			 <div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Input Petugas -->