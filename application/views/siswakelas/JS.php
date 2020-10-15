<script type="text/javascript">
function showInputData(){
	$('#inputDataModal').modal('show');
}
function hapusSiswaKelas(e){
	$('#hapusdata').click(function(){
		$.ajax({
			url: "<?php echo base_url('siswakelas/hapusdata/')?>"+e,
			type: "post"
		})
	});
	$('#hapusDataModal').modal('show');
}
function editSiswaKelas(e){
	var html = '';
	var i;
	$.ajax({
		url: "<?php echo base_url('siswakelas/updatedata/')?>"+e,
		type: "post",
		success: function(data){
			var obj = JSON.parse(data);
			for (i=1; i<obj.length; i++){
				
				html += '<option value='+obj[i].ID_KELAS+'>'+obj[i].KELAS+'</option>'
			}
			$('#detileditkelas').html(html);
		}
	})
	$('#editDataModal').modal('show');
}
</script>