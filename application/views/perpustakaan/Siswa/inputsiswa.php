<!-- Modal Input Petugas -->
<div class="modal fade" id="inputSiswaModal" tabindex="-1" role="dialog" aria-labelledby="inputSiswaModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title text-white" id="inputSiswaModal">Input Data Siswa</h4>
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
                               <input type="text" name="nama" id="nama" class="form-control " placeholder="Nama Lengkap">
                            </div>
							<div class="col-md-4">
                               <input type="text" name="thditerima" id="thditerima" class="form-control " placeholder="Tahun Diterima">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="nisn" id="nisn" class="form-control " placeholder="NISN">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                             <select name="bidangstudi"  class="form-control">
                                <option value="">Pilih Bidang Studi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Otomotif">Teknik Otomotif</option>
                             </select>
                            </div>
                            <div class="col-md-4">
                            <select name="kelamin"  class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                             </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="noijazah" id="noijazah" class="form-control " placeholder="No. Seri Ijazah">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                                <input type="text" name="noskhun" id="noskhun" class="form-control " placeholder="No. Seri SKHUN">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="noun" id="noun" class="form-control " placeholder="No. Ujian Nasional">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="nik" id="nik" class="form-control " placeholder="NIK (Nomor Induk Kependudukan)">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                            <div class="col-md-4">
                                <input type="text" name="asalsekolah" id="asalsekolah" class="form-control " placeholder="Asal Sekolah">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="ttl" id="ttl" class="form-control " placeholder="Tempat, Tanggal Lahir">
                            </div>
                            <div class="col-md-4">
                                <select name="agama" class="form-control">
                                    <option value="">Agama *</option>
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
                                <input type="text" name="berkebutuhan" id="berkebutuhan" class="form-control " placeholder="Berkebutuhan Khusus">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="transportasi" id="transportasi" class="form-control " placeholder="Alat Transportasi">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="telprumah" id="telprumah" class="form-control " placeholder="Telpon Rumah">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-4">
                                <input type="email" name="email" id="email" class="form-control " placeholder="Email">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="registrasiakta" id="registrasiakta" class="form-control " placeholder="No. Registrasi Akta Lahir">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="namawali" id="namawali" class="form-control " placeholder="Nama Wali">
                            </div>
                        </div>
                        <div class="form-group row  mb-3">
                          <div class="col-md-3">
                                <input type="text" name="tb" id="tb" class="form-control " placeholder="Tinggi Badan (cm)">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="bb" id="bb" class="form-control " placeholder="Berat Badan (Kg)">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="jmlsaudara" id="jmlsaudara" class="form-control " placeholder="Jumlah Saudara">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="goldarah" id="goldarah" class="form-control " placeholder="Gologan Darah">
                            </div>
                        </div>
                      </li>
                     <li class="list-group-item">
                      <div class="container-fluid">
                      <h5 class="text-dark font-weight-bold mb-4" >B. DATA AYAH</h5>
                       <div class="form-group row  mb-3">
                          <div class="col-md-4">
                                <input type="text" name="namaayah" id="namaayah" class="form-control " placeholder="Nama Ayah">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="nikayah" id="nikayah" class="form-control " placeholder="NIK Ayah">
                            </div>
                            <div class="col-md-4">
                            <select name="pkrjayah" class="form-control">
                                <option value="">Pekerjaan Ayah</option>
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
                         <select name="pndayah" class="form-control">
                            <option value="">Pendidikan Ayah</option>
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
                           <select name="pngsayah" class="form-control">
                                <option value="">Penghasilan Ayah</option>
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
                          <input type="text" name="namaibu" id="namaibu" class="form-control " placeholder="Nama Ibu">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="nikibu" id="nikibu" class="form-control " placeholder="NIK Ibu">
                         </div>
                        <div class="col-md-4">
                        <select name="pkrjibu" class="form-control">
                            <option value="">Pekerjaan Ibu</option>
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
                       <select name="pndibu" class="form-control">
                            <option value="">Pendidikan Ibu</option>
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
                       <select name="pngsibu" class="form-control">
                            <option value="">Penghasilan Ibu</option>
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
                         <label for="alamat">Alamat Lengkap :</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"></textarea>
                         </div>
                     </li>
                  </ul>
                 </div>
                 <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                </div>
            </form>
          </div>       
       </div>
    </div>
 </div>
 
<!-- End Modal Input Petugas -->