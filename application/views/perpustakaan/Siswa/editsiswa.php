<!-- Modal Input Petugas -->
<div class="modal fade" id="editSiswaModal" tabindex="-1" role="dialog" aria-labelledby="editSiswaModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="editSiswaModal">Edit Data Siswa</h4>
        </div>
        <div class="modal-body">
            <form action="<?php echo base_url('siswa/editsiswa'); ?>" method="post" class="user">
                <div class="modal-body">
                  <ul class="list-group list-group-flush">
                     <li class="list-group-item">
                     <div class="container-fluid">
                     <h5 class="text-dark font-weight-bold mb-4" >A. DATA SISWA</h5>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
							 <input type="hidden" name="idsiswa" id="editidsiswa" class="form-control" readonly>
                                <input type="hidden" name="kodesiswa" id="editkodesiswa" class="form-control" readonly>
								<label for="editnisn">NISN :</label>
                                <input type="text" name="nisn" id="editnisn" class="form-control">
                            </div>
                            <div class="col-md-4">
                               <label for="thditerima">Tahun Diterima :</label>
                               <input type="text" name="thditerima" id="editthditerima" class="form-control">
                            </div>
                            <div class="col-md-4">
                            <label>Bidang Studi Keahlian :</label>
                             <select name="bidangstudi"  class="form-control" id="editbidangstudi">
                                <option value=""></option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Otomotif">Teknik Otomotif</option>
                             </select>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                              <label for="editnama">Nama Siswa :</label>
                              <input type="text" name="nama" id="editnama" class="form-control">
                            </div>
                            <div class="col-md-4">
                            <label>Jenis Kelamin :</label>
                            <select name="kelamin"  class="form-control" id="editkelamin">
                                <option value=""></option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                             </select>
                            </div>
                            <div class="col-md-4">
                              <label for="editnoijazah">No. Seri Ijazah :</label>
                              <input type="text" name="noijazah" id="editnoijazah" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                              <label for="editnoskhun">No. Seri SKHUN :</label>
                              <input type="text" name="noskhun" id="editnoskhun" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label for="editnoun">No. Ujian Nasional :</label>
                              <input type="text" name="noun" id="editnoun" class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label for="editnik">NIK:</label>
                              <input type="text" name="nik" id="editnik" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                            <label for="editasalsekolah">Asal Sekolah :</label>
                            <input type="text" name="asalsekolah" id="editasalsekolah" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <label for="editttl">Tempat, Tanggal Lahir:</label>
                             <input type="text" name="ttl" id="editttl" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <label>Agama :</label>
                                <select name="agama" class="form-control" id="editagama">
                                    <option value=""></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katholik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                                    <option value="Kepercayaan kpd Tuhan YME">Kepercayaan kpd Tuhan YME</option>
                                    <option value="Tidak diisi">Tidak diisi</option>
                                    <option value="Lainnya">Lainnya</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                             <label for="editberkebutuhan">Berkebutuhan Khusus :</label>
                             <input type="text" name="berkebutuhan" id="editberkebutuhan" class="form-control">
                          </div>
                          <div class="col-md-4">
                             <label for="edittransportasi">Alat Transportasi :</label>
                             <input type="text" name="transportasi" id="edittransportasi" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <label for="edittelprumah">Telp Rumah :</label>
                             <input type="text" name="telprumah" id="edittelprumah" class="form-control">
                          </div>
                         </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                            <label for="editemail">Email:</label>
                             <input type="email" name="email" id="editemail" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <label for="editregistrasiakta">No. Registrasi Akta Lahir :</label>
                             <input type="text" name="registrasiakta" id="editregistrasiakta" class="form-control">
                           </div>
                          <div class="col-md-4">
                             <label for="editnamawali">Nama Wali :</label>
                             <input type="text" name="namawali" id="editnamawali" class="form-control">
                           </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-3">
                             <label for="edittb">Tinggi Badan :</label>
                             <input type="text" name="tb" id="edittb" class="form-control">
                           </div>
                           <div class="col-md-3">
                               <label for="editbb">Berat Badan :</label>
                               <input type="text" name="bb" id="editbb" class="form-control">
                            </div>
                            <div class="col-md-3">
                               <label for="editjmlsaudara">Jumlah Saudara :</label>
                               <input type="text" name="jmlsaudara" id="editjmlsaudara" class="form-control">
                           </div>
                           <div class="col-md-3">
                              <label for="editgoldarah">Gol. Darah :</label>
                              <input type="text" name="goldarah" id="editgoldarah" class="form-control">
                            </div>
                        </div>
                      </li>
                     <li class="list-group-item">
                      <div class="container-fluid">
                      <h5 class="text-dark font-weight-bold mb-4" >B. DATA AYAH</h5>
                       <div class="form-group row  mb-3">
                          <div class="col-md-4">
                             <label for="editnamaayah">Nama Ayah :</label>
                             <input type="text" name="namaayah" id="editnamaayah" class="form-control">
                           </div>
                          <div class="col-md-4">
                             <label for="editnikayah">NIK Ayah :</label>
                             <input type="text" name="nikayah" id="editnikayah" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <label>Pekerjaan Ayah :</label>
                            <select name="pkrjayah" class="form-control" id="editpkrjayah">
                                <option value=""></option>
                                <option value="(tidak diisi)">(tidak diisi)</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Lainnya">Lainnya</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                <option value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">Wirausaha</option>
                            </select>
                            </div>
                        </div>
                     <div class="form-group row  mb-3">
                       <div class="col-md-4">
                       <label>Pendidikan Ayah :</label>
                         <select name="pndayah" class="form-control" id="editpndayah">
                            <option value=""></option>
                            <option value="(tidak diisi)">(tidak diisi)</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="Informal">Informal</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Non Formal">Non Formal</option>
                            <option value="Paket A">Paket A</option>
                            <option value="Paket B">Paket B</option>
                            <option value="Paket C">Paket C</option>
                            <option value="PAUD">PAUD</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value=">S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="SD / Sederajat">SD / Sederajat</option>
                            <option value="SMA / Sederajat">SMA / Sederajat</option>
                            <option value="SMP / Sederajat">SMP / Sederajat</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="TK / Sederaja">TK / Sederajat</option>
                         </select>
                         </div>
                        <div class="col-md-4">
                        <label>Penghasilan Ayah :</label>
                           <select name="pngsayah" class="form-control" id="editpngsayah">
                                <option value=""></option>
                                <option value="(tidak diisi)">(tidak diisi)</option>
                                <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                                <option value="Kurang dari Rp. 5000.000">Kurang dari Rp. 5000.000</option>
                                <option value="Lainnya">Lainnya</option>
                                <option value="Lebih dari Rp. 2.000.000">Lebih dari Rp. 2.000.000</option>
                                <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                                <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                            </select>
                           </div>
                        </div>
                     </li>
                     <li class="list-group-item">
                     <div class="container-fluid">
                     <h5 class="text-dark font-weight-bold mb-4" >C. DATA IBU</h5>
                      <div class="form-group row  mb-3">
                        <div class="col-md-4">
                        <label for="editnamaibu">Nama Ibu :</label>
                          <input type="text" name="namaibu" id="editnamaibu" class="form-control">
                        </div>
                        <div class="col-md-4">
                        <label for="editnikibu">NIK Ibu :</label>
                            <input type="text" name="nikibu" id="editnikibu" class="form-control">
                         </div>
                        <div class="col-md-4">
                        <label>Pekerjaan Ibu :</label>
                        <select name="pkrjibu" class="form-control" id="editpkrjibu">
                            <option value=""></option>
                            <option value="(tidak diisi)">(tidak diisi)</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                            <option value="Tenaga Kerja Indonesia">Tenaga Kerja Indonesia</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                          </select>
                         </div>
                       </div>
                       <div class="form-group row  mb-3">
                       <div class="col-md-4">
                       <label>Pendidikan Ibu :</label>
                       <select name="pndibu" class="form-control" id="editpndibu">
                            <option value=""></option>
                            <option value="(tidak diisi)">(tidak diisi)</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="Informal">Informal</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Non Formal">Non Formal</option>
                            <option value="Paket A">Paket A</option>
                            <option value="Paket B">Paket B</option>
                            <option value="Paket C">Paket C</option>
                            <option value="PAUD">PAUD</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value=">S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            <option value="SD / Sederajat">SD / Sederajat</option>
                            <option value="SMA / Sederajat">SMA / Sederajat</option>
                            <option value="SMP / Sederajat">SMP / Sederajat</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="TK / Sederaja">TK / Sederajat</option>
                        </select>
                       </div>
                       <div class="col-md-4">
                       <label>Penghasilan Ibu :</label>
                       <select name="pngsibu" class="form-control" id="editpngsibu">
                            <option value=""></option>
                            <option value="(tidak diisi)">(tidak diisi)</option>
                            <option value="Kurang dari Rp. 1.000.000">Kurang dari Rp. 1.000.000</option>
                            <option value="Kurang dari Rp. 5000.000">Kurang dari Rp. 5000.000</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Lebih dari Rp. 2.000.000">Lebih dari Rp. 2.000.000</option>
                            <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                            <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                            <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                            <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                            <option value="Rp. 500.000 - Rp. 999.999">Rp. 500.000 - Rp. 999.999</option>
                            <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                        </select>
                       </div>
                       </div>
                     </li>
                     <li class="list-group-item">
                         <div class="col-md">
                         <label for="editalamat">Alamat Lengkap :</label>
                            <textarea name="alamat" id="editalamat" cols="30" rows="2" class="form-control"></textarea>
                         </div>
                     </li>
                  </ul>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="simpan" id="editsiswa">Simpan</button>
                </div>
            </form>
         </div>      
       </div>
    </div>
 </div>
<!-- End Modal Input Petugas -->