 <script type="text/javascript">
   function showInputPetugas(){
		$('#inputPetugasModal').modal('show');
	}
   function showPetugasDetail($id){
		var id = $id;
		$.ajax({
			url: "<?php echo base_url('petugas/detailpetugas/')?>"+id,
			type: "post",
			success: function(data){
			var obj = JSON.parse(data);
			$('#detilkodePetugas').val(obj.KODE_PETUGAS);
			$('#detilnama').val(obj.NAMA_PETUGAS);
			$('#detilkelamin').val(obj.JNS_KELAMIN);
			$('#detiltelp').val(obj.TELP);
			$('#detilemail').val(obj.EMAIL);
			$('#detilagama').val(obj.AGAMA);
			$('#detilnip').val(obj.NIP);
			$('#detilnik').val(obj.NIK);
			$('#detilttl').val(obj.TTL);
			$('#detiljadwal').val(obj.JDWL_TUGAS);
			$('#detillevel').val(obj.LEVEL);
			$('#detilalamat').val(obj.ALAMAT);
			$('#detailPetugasModal').modal('show');
			},error: function(jqXHR, textStatus, errorThrown){
			  
			alert('Erorr'+jqXHR.status);
		  }
			
		})
	}
   function showPetugasEdit($id){
		var id = $id;
			$.ajax({
			url: "<?php echo base_url('petugas/detailpetugas/')?>"+id,
			type: "post",
			success: function(data){
			var obj = JSON.parse(data);
			$('#editidPetugas').val(obj.ID_PETUGAS);
			$('#editkodePetugas').val(obj.KODE_PETUGAS);
			$('#editnama').val(obj.NAMA_PETUGAS);
			$('#editkelamin').val(obj.JNS_KELAMIN);
			$('#edittelp').val(obj.TELP);
			$('#editemail').val(obj.EMAIL);
			$('#editagama').val(obj.AGAMA);
			$('#editnip').val(obj.NIP);
			$('#editnik').val(obj.NIK);
			$('#editttl').val(obj.TTL);
			$('#editjadwal').val(obj.JDWL_TUGAS);
			$('#editlevel').val(obj.LEVEL);
			$('#editalamat').val(obj.ALAMAT);
			$('#editPetugasModal').modal('show');
			},error: function(jqXHR, textStatus, errorThrown){
			  
			alert('Erorr'+jqXHR.status);
		  }	
		})
		$('#editpetugas').click(function(){
			var id = $id;
			$.ajax({
				url: "<?php echo base_url('petugas/editpetugas/')?>"+id,
				type: "post",
			});
		});
	}
   function showHapusPetugas($id){
		var id = $id;
		$.ajax({
			url: "<?php echo base_url('petugas/detailpetugas/')?>"+id,
			type: "post",
			success: function(data){
			var obj = JSON.parse(data);
			$('#hapusidpetugas').val(obj.ID_PETUGAS);
			}
		});
		$('#hapuspetugas').click(function(){
			$.ajax({
				url: "<?php echo base_url('petugas/hapuspetugas/')?>"+id,
				type: "post",
			});
		});
		$('#hapusPetugasModal').modal('show');
	}
</script>