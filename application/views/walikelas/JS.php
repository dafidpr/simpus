<script type="text/javascript">
function showInputWali(){
	$('#inputWaliKelasModal').modal('show');
}
function hapusWaliKelas(e){
	$('#hapuswali').click(function(){
		$.ajax({
			url: "<?php echo base_url('walikelas/hapuswali/')?>"+e,
			type: "post"
		})
	});
	$('#hapusWalikelas').modal('show');
}
function editWaliKelas(e){
	var html = '';
	var i;
	$.ajax({
		url: "<?php echo base_url('walikelas/editwalikelas/')?>"+e,
		type: "post",
		success: function(data){
			console.log(data);
			var obj = JSON.parse(data);
			for (i=1; i<obj.length; i++){
				html += '<option value='+obj[i].ID_KELAS+'>'+obj[i].KELAS+'</option>'
			}
			$('#editwalikelas').html(html);
		}
	})
	$('#editWaliKelasModal').modal('show');
}
</script>