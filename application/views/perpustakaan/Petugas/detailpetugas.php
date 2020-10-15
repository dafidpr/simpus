<!-- Detail Petugas Modal -->
<div class="modal fade" id="detailPetugasModal" tabindex="-1" role="dialog" aria-labelledby="detailPetugasModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="detailPetugasModal">Detail Data Petugas</h4>
        </div>
        <div class="modal-body">
        <form action="" method="post" class="user">
           <div class="modal-body">
               <div class="container-fluid">
                 <div class="form-group row  mb-3">
                    <div class="col-md-6">
                       <label for="detilnama" class="ml-1">Nama Petugas :</label>
                       <input type="text" name="nama" id="detilnama" class="form-control"  readonly>
                    </div>
                    <div class="col-md-6">
                       <label for="detilkelamin" class="ml-1">Jenis Kelamin :</label>
                       <input type="text" name="kelamin" id="detilkelamin" class="form-control"  readonly>
                    </div>
                   </div>
                   <div class="form-group row  mb-3">
                    <div class="col-md-6">
                       <label for="kelamin" class="ml-1">Telp :</label>
                        <input type="text" name="telp" id="detiltelp" class="form-control"  readonly>
                     </div>
                     <div class="col-md-6">
                         <label for="detilemail" calss="ml-1">Email :</label>
                          <input type="text" name="email" id="detilemail" class="form-control " readonly>
                     </div>
                    </div>
                    <div class="form-group row  mb-3">
                       <div class="col-md-6">
                          <label for="detilagama" calss="ml-1">Agama :</label>
                            <input type="text" name="agama" id="detilagama" class="form-control " readonly>
                        </div>
                        <div class="col-md-6">
                           <label for="detilnip" class="ml-1">NIP :</label>
                           <input type="text" name="nip" id="detilnip" class="form-control"readonly>
                         </div>
                    </div>
                    <div class="form-group row  mb-3">
                        <div class="col-md-6">
                            <label for="detilnik" class="ml-1">NIK :</label>
                           <input type="text" name="nik" id="detilnik" class="form-control " readonly>
                        </div>
                        <div class="col-md-6">
                           <label for="detilttl" class="ml-1">Tempat, Tanggal Lahir :</label>
                            <input type="text" name="ttl" id="detilttl" class="form-control" readonly>
                        </div>
                     </div>
                     <div class="form-group row  mb-3">
                        <div class="col-md-6">
                            <label for="detiljadwal" class="ml-1">Jadwal Tugas :</label>
                            <input type="text" name="jadwal" id="detiljadwal" class="form-control" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="detillevel" class="ml-1">Level :</label>
                           <input type="text" name="level" id="detillevel" class="form-control" readonly>
                        </div>
                     </div>
                     <div class="form-group row  mb-3">
                        <div class="col-md-12">
                           <label for="detilalamat" class="ml-1">Alamat :</label>
                           <textarea name="alamat" id="detilalamat" cols="30" rows="2"  class="form-control" readonly></textarea>
                        </div>
                     </div>
                 </div>
             </div>
         </form>
         </div>
         <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
<!-- End Detail Petugas Modal -->
