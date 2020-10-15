<script type="text/javascript">
       
       function showInputSiswa(){
           $('#inputSiswaModal').modal('show');
       }
       function showSiswaDetail($id){
		   var id = $id;
		   $.ajax({
			   url: "<?php echo base_url('siswa/detailsiswa/') ?>"+id,
			   type: "post",
			   success: function(data){
				var obj = JSON.parse(data);
				$('#detilnisn').val(obj.NISN);
				$('#detilthditerima').val(obj.TH_DITERIMA);
				$('#detilbidangstudi').val(obj.BDG_STUDI_KEAHLIAN);
				$('#detilnama').val(obj.NAMA_LNGKP);
				$('#detilkelamin').val(obj.JNS_KELAMIN);
				$('#detilnoijazah').val(obj.NO_SERI_IJAZAH);
				$('#detilnoskhun').val(obj.NO_SERI_SKHUN);
				$('#detilnoun').val(obj.NO_UN);
				$('#detilnik').val(obj.NIK);
				$('#detilasalsekolah').val(obj.ASAL_SEKOLAH);
				$('#detilttl').val(obj.TTL);
				$('#detilagama').val(obj.AGAMA);
				$('#detilberkebutuhan').val(obj.BERKEBUTUHAN_KHUSUS);
				$('#detiltransportasi').val(obj.ALAT_TRANSPORTASI);
				$('#detiltelprumah').val(obj.TLP_RUMAH);
				$('#detilemail').val(obj.EMAIL);
				$('#detilregistrasiakta').val(obj.NO_REGISTRASI_AKTA_LAHIR);
				$('#detilnamawali').val(obj.NAMA_WALI);
				$('#detiltb').val(obj.TB);
				$('#detilbb').val(obj.BB);
				$('#detiljmlsaudara').val(obj.JML_SAUDARA);
				$('#detilgoldarah').val(obj.GOL_DARAH);
				$('#detilnamaayah').val(obj.NAMA_AYAH);
				$('#detilnikayah').val(obj.NIK_AYAH);
				$('#detilpkrjayah').val(obj.PEKERJAAN_AYAH);
				$('#detilpndayah').val(obj.PENDIDIKAN_AYAH);
				$('#detilpngsayah').val(obj.PENGHASILAN_AYAH);
				$('#detilnamaibu').val(obj.NAMA_IBU);
				$('#detilnikibu').val(obj.NIK_IBU);
				$('#detilpkrjibu').val(obj.PEKERJAAN_IBU);
				$('#detilpndibu').val(obj.PENDIDIKAN_IBU);
				$('#detilpngsibu').val(obj.PENGHASILAN_IBU);
				$('#detilalamat').val(obj.ALAMAT_LNGKP);
				$('#detailSiswaModal').modal('show');
			   }
		   })
       }
       function showSiswaEdit($id){
		   var id = $id;
		   $.ajax({
               url: "<?php echo base_url('siswa/detailsiswa/') ?>"+id,
			   type: "post",
			  success: function(data){
				var obj = JSON.parse(data);
                $('#editidsiswa').val(obj.ID_SISWA);
				$('#editkodesiswa').val(obj.KODE_SISWA);
				$('#editnisn').val(obj.NISN);
				$('#editthditerima').val(obj.TH_DITERIMA);
				$('#editbidangstudi').val(obj.BDG_STUDI_KEAHLIAN);
				$('#editnama').val(obj.NAMA_LNGKP);
				$('#editkelamin').val(obj.JNS_KELAMIN);
				$('#editnoijazah').val(obj.NO_SERI_IJAZAH);
				$('#editnoskhun').val(obj.NO_SERI_SKHUN);
				$('#editnoun').val(obj.NO_UN);
				$('#editnik').val(obj.NIK);
				$('#editasalsekolah').val(obj.ASAL_SEKOLAH);
				$('#editttl').val(obj.TTL);
				$('#editagama').val(obj.AGAMA);
				$('#editberkebutuhan').val(obj.BERKEBUTUHAN_KHUSUS);
				$('#edittransportasi').val(obj.ALAT_TRANSPORTASI);
				$('#edittelprumah').val(obj.TLP_RUMAH);
				$('#editemail').val(obj.EMAIL);
				$('#editregistrasiakta').val(obj.NO_REGISTRASI_AKTA_LAHIR);
				$('#editnamawali').val(obj.NAMA_WALI);
				$('#edittb').val(obj.TB);
				$('#editbb').val(obj.BB);
				$('#editjmlsaudara').val(obj.JML_SAUDARA);
				$('#editgoldarah').val(obj.GOL_DARAH);
				$('#editnamaayah').val(obj.NAMA_AYAH);
				$('#editnikayah').val(obj.NIK_AYAH);
				$('#editpkrjayah').val(obj.PEKERJAAN_AYAH);
				$('#editpndayah').val(obj.PENDIDIKAN_AYAH);
				$('#editpngsayah').val(obj.PENGHASILAN_AYAH);
				$('#editnamaibu').val(obj.NAMA_IBU);
				$('#editnikibu').val(obj.NIK_IBU);
				$('#editpkrjibu').val(obj.PEKERJAAN_IBU);
				$('#editpndibu').val(obj.PENDIDIKAN_IBU);
				$('#editpngsibu').val(obj.PENGHASILAN_IBU);
				$('#editalamat').val(obj.ALAMAT_LNGKP);
				$('#editSiswaModal').modal('show'); 
			  }
		   });
		   $('#editsiswa').click(function(){
			   var id = $id;
			   $.ajax({
				   url: "<?php echo base_url('siswa/editsiswa/')?>"+id,
				   type: "post",
			   });
		   });
         }
	   function showSiswaHapus($id){
			 var id = $id;
			 $.ajax({
               url: "<?php echo base_url('siswa/detailsiswa/') ?>"+id,
			   type: "post",
			   success: function(data){
				var obj = JSON.parse(data);
                $('#hapusidsiswa').val(obj.ID_SISWA);
			  }
			 });
			 $('#hapussiswa').click(function (){
				  $.ajax({
					url: "<?php echo base_url('siswa/hapussiswa/')?>"+id,
					type: "post",				
			 });
			})
			 $('#hapusSiswaModal').modal('show');
		 }
   </script>