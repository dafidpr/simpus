<script>
function inputTabungan(){
	$('#inputTabunganModal').modal('show');
}
function carisiswa(){
	 var keysiswa = document.getElementById('kodesiswa').value;
		$.ajax({
			url: "<?php echo base_url('siswa/carisiswa/')?>"+keysiswa,
			type: "post",
			success: function(data){
				var obj = JSON.parse(data);
				$('#idsiswa').val(obj.id_siswa);
				$('#namasiswa').val(obj.nama_lngkp);
			}
		});
}
</script>