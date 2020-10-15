<script type="text/javascript">
function showInputKelas(){
	$('#inputKelasModal').modal('show');
}
function showHapusKelas(e){
	$('#hapuskelas').click(function(){
		$.ajax({
		url: "<?php echo base_url();?>kelas/hapuskelas/"+e,
		type: "post",
	   });
	});
	$('#hapusKelasModal').modal('show');
}
function showEditKelas(e){
	$.ajax({
		url: "<?php echo base_url();?>kelas/detailkelas/"+e,
		type: "post",
		success: function(data){
			console.log(data);
		  var obj = JSON.parse(data);
		  $('#editidkelas').val(obj.id_kelas);
		  $('#editkelas').val(obj.kelas);
		}
	});
    $('#editKelasModal').modal('show');
}
/*function showDetilKelas(e){
    $('#detilkelas').DataTable({
	"bProcessing": true,
	"bJQueryUI": true,
	"sPaginationType": "full_numbers",
	"sAjaxSource": '<?php echo base_url();?>kelas/LoadDetilKelas/'+e,
	"sAjaxDataProp": "aaData",
    "fnRender": function (oObj){uss = oObj.aData["Username"];},
	"aoColumns": [
	{"mDataProp": "NISN", bSearchable: true},
	{"mDataProp": "NAMA_LNGKP", bSearchable: true},
	{"mDataProp": "JNS_KELAMIN", bSearchable: true},
	{"mDataProp": "KELAS", bSearchable: true},
	],
	"bDestroy": true,
   });
	$('#detilKelasModal').modal('show');
}*/

</script>