<script type="text/javascript">
function showInputGuru(){
  $('#inputWaliModal').modal('show');
}
function showHapusGuru(e){
	$('#hapusguru').click(function(){
		$.ajax({
			url: "<?php echo base_url('guru/hapusguru/')?>"+e,
			type: "post",
		});
	});
   $('#hapusGuruModal').modal('show');
}
function showDetailGuru(e){
	$.ajax({
		url: "<?php echo base_url('guru/detilguru/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#detilnamaguru').val(obj.NAMA_GURU);
			$('#detilkelaminguru').val(obj.JNS_KELAMIN);
			$('#detiltelpguru').val(obj.TELP);
			$('#detilemailguru').val(obj.EMAIL);
			$('#detilagamaguru').val(obj.AGAMA);
			$('#detilnipguru').val(obj.NIP);
			$('#detilnikguru').val(obj.NIK);
			$('#detilttlguru').val(obj.TTL);
			$('#detilalamatguru').val(obj.ALAMAT);
		}
		});
	$('#detailGuruModal').modal('show');
}
function showEditGuru(e){
	$.ajax({
		url: "<?php echo base_url('guru/detilguru/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#idguru').val(obj.ID_GURU);
			$('#kodeguru').val(obj.KODE_GURU);
			$('#editnamaguru').val(obj.NAMA_GURU);
			$('#editkelaminguru').val(obj.JNS_KELAMIN);
			$('#edittelpguru').val(obj.TELP);
			$('#editemailguru').val(obj.EMAIL);
			$('#editagamaguru').val(obj.AGAMA);
			$('#editnipguru').val(obj.NIP);
			$('#editnikguru').val(obj.NIK);
			$('#editttlguru').val(obj.TTL);
			$('#editalamatguru').val(obj.ALAMAT);
		   }
		});
	$.ajax({
		url: "<?php echo base_url('guru/editguru')?>",
		type: "post",
	});
	$('#editGuruModal').modal('show');
}
</script>