<!-- Modal Input Petugas -->
<div class="modal fade" id="detailSiswaModal" tabindex="-1" role="dialog" aria-labelledby="detailSiswaModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="detailSiswaModal">Edit Data Siswa</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url('siswa/inputsiswa'); ?>" method="post" class="user">
                <div class="modal-body">
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                     <div class="container-fluid">
                     <h5 class="text-dark font-weight-bold mb-4" >A. DATA SISWA</h5>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                               <label for="detilnoPendaftaran">NISN :</label>
                                <input type="text" name="nisn" id="detilnisn" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                               <label for="detilnoPendaftaran">Tahun diterima :</label>
                                <input type="text" name="thditerima" id="detilthditerima" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label>Bidang Studi Keahlian :</label>
                               <input type="text" name="bidangstudi" id="detilbidangstudi" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                            <label for="detilnama">Nama Siswa :</label>
                                <input type="text" name="nama" id="detilnama" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                               <label>Jenis Kelamin :</label>
                                <input type="text" name="kelamin" id="detilkelamin" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilnoijazah">No. Seri Ijazah :</label>
                                <input type="text" name="noijazah" id="detilnoijazah" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                          <label for="detilnoskhun">No. Seri SKHUN :</label>
                                <input type="text" name="noskhun" id="detilnoskhun" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilnoun">No. Ujian Nasional :</label>
                                <input type="text" name="noun" id="detilnoun" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilnik">NIK:</label>
                                <input type="text" name="nik" id="detilnik" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                            <label for="detilasalsekolah">Asal Sekolah :</label>
                                <input type="text" name="asalsekolah" id="detilasalsekolah" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilttl">Tempat, Tanggal Lahir:</label>
                                <input type="text" name="ttl" id="detilttl" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label>Agama :</label>
                            <input type="text" name="agama" id="detilagama" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                          <label for="detilberkebutuhan">Berkebutuhan Khusus :</label>
                                <input type="text" name="berkebutuhan" id="detilberkebutuhan" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detiltransportasi">Alat Transportasi :</label>
                                <input type="text" name="transportasi" id="detiltransportasi" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detiltelprumah">Telp Rumah :</label>
                                <input type="text" name="telprumah" id="detiltelprumah" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                          <label for="detilemail">Email:</label>
                                <input type="email" name="email" id="detilemail" class="form-control" readonly> 
                            </div>
                            <div class="col-md-4">
                            <label for="detilregistrasiakta">No. Registrasi Akta Lahir :</label>
                                <input type="text" name="registrasiakta" id="detilregistrasiakta" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilnamawali">Nama Wali :</label>
                                <input type="text" name="namawali" id="detilnamawali" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-3">
                          <label for="detiltb">Tinggi Badan :</label>
                                <input type="number" name="tb" id="detiltb" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                            <label for="detilbb">Berat Badan :</label>
                                <input type="number" name="bb" id="detilbb" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                            <label for="detiljmlsaudara">Jumlah Saudara :</label>
                                <input type="number" name="jmlsaudara" id="detiljmlsaudara" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                            <label for="detilgoldarah">Gol. Darah :</label>
                                <input type="text" name="goldarah" id="detilgoldarah" class="form-control" readonly>
                            </div>
                        </div>
                      </li>
                     <li class="list-group-item">
                      <div class="container-fluid">
                      <h5 class="text-dark font-weight-bold mb-4" >B. DATA AYAH</h5>
                       <div class="form-group row  mb-3">
                          <div class="col-md-4">
                          <label for="detilnamaayah">Nama Ayah :</label>
                                <input type="text" name="namaayah" id="detilnamaayah" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label for="detilnikayah">NIK Ayah :</label>
                                <input type="text" name="nikayah" id="detilnikayah" class="form-control" readonly>
                            </div>
                            <div class="col-md-4">
                            <label>Pekerjaan Ayah :</label>
                            <input type="text" name="pkrjayah" id="detilpkrjayah" class="form-control" readonly>
                            </div>
                        </div>
                     <div class="form-group row  mb-3">
                       <div class="col-md-4">
                       <label>Pendidikan Ayah :</label>
                       <input type="text" name="pndayah" id="detilpndayah" class="form-control" readonly>
                         </div>
                        <div class="col-md-4">
                            <label>Penghasilan Ayah :</label>
                             <input type="text" name="pngsayah" id="detilpngsayah" class="form-control" readonly>
                           </div>
                        </div>
                     </li>
                     <li class="list-group-item">
                     <div class="container-fluid">
                     <h5 class="text-dark font-weight-bold mb-4" >C. DATA IBU</h5>
                      <div class="form-group row  mb-3">
                        <div class="col-md-4">
                        <label for="detilnamaibu">Nama Ibu :</label>
                          <input type="text" name="namaibu" id="detilnamaibu" class="form-control" readonly>
                        </div>
                        <div class="col-md-4">
                        <label for="detilnikibu">NIK Ibu :</label>
                            <input type="text" name="nikibu" id="detilnikibu" class="form-control" readonly>
                         </div>
                        <div class="col-md-4">
                        <label>Pekerjaan Ibu :</label>
                          <input type="text" name="pkrjibu" id="detilpkrjibu" class="form-control" readonly> 
                         </div>
                       </div>
                       <div class="form-group row  mb-3">
                       <div class="col-md-4">
                       <label>Pendidikan Ibu :</label>
                           <input type="text" name="pndibu" id="detilpndibu" class="form-control" readonly>
                       </div>
                       <div class="col-md-4">
                       <label>Penghasilan Ibu :</label>
                          <input type="text" name="pngsibu" id="detilpngsibu" class="form-control" readonly>
                       </div>
                       </div>
                     </li>
                     <li class="list-group-item">
                         <div class="col-md">
                         <label for="detilalamat">Alamat Lengkap :</label>
                            <textarea name="alamat" id="detilalamat" cols="30" rows="2" class="form-control" readonly></textarea>
                         </div>
                     </li>
                  </ul>
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