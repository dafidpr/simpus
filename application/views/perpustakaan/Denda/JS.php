<script type="text/javascript">

function showInputDenda(){
	$('#inputDendaModal').modal('show');
}
function showHapusDenda($id){
	var id = $id;
	$('#hapusdenda').click(function(){
		$.ajax({
			url: "<?php echo base_url('denda/hapusdenda/')?>"+id,
			type: "post",
		});
	});
	$('#hapusDendaModal').modal('show');
}
function showEditDenda($id){
	var id = $id;
	$.ajax({
		url: "<?php echo base_url('denda/detaildenda/')?>"+id,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			$('#iddenda').val(obj.ID_DENDA);
			$('#editdenda').val(obj.DENDA);
		}
	});
	$('#btneditdenda').click(function(){
		$.ajax({
			url: "<?php echo base_url('denda/editdenda')?>",
			type: "post"
		})
	});
	$('#editDendaModal').modal('show');
}

</script>