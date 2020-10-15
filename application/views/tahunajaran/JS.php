<script type="text/javascript">
function showInputAjaran(){
	$('#inputAjaranModal').modal('show');
}
function showEditAjaran(e){
	$.ajax({
		url: "<?php echo base_url('ta/detilajaran/')?>"+e,
		type: "post",
		success: function (data){
			var obj = JSON.parse(data);
			$('#editidta').val(obj.ID_TA);
			$('#editta').val(obj.THN_AJARAN);
		}
	});
	$.ajax({
		url: "<?php echo base_url('ta/editajaran')?>",
		type: "post",
	});
	$('#editAjaranModal').modal('show');
}

function showHapusAjaran(e){
	$('#hapusta').click(function(){
		$.ajax({
		url: "<?php echo base_url('ta/hapusajaran/')?>"+e,
		type: "post",
	  });
	});
	$('#hapusAjaranModal').modal('show');
}
function loaData(){
	   $('#dataajaran').DataTable({
	   "bProcessing": true,
	   "bJQueryUI": true,
	   "sPaginationType": "full_numbers",
	   "sAjaxSource": '<?php echo base_url();?>TA/LoadData',
	   "sAjaxDataProp": "aaData",
	   "fnRender": function (oObj){uss = oObj.aData["Username"];},
	   "aoColumns": [
		  {"mDataProp": "id_ta", bSearchable: true},
		  {"mDataProp": "thn_ajaran", bSearchable: true},
		  {"mDataProp": "status_ta", bSearchable: true},
		  {"mDataProp": function (data, type, val){
			pKode = data.id_ta;
			var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditAjaran('+pKode+')"><i class="fa fa-pencil"></i></a> \n\<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusAjaran('+pKode+')"><i class="fa fa-trash"></i></a>\n\<a href="#" class="btn btn-success btn-xs" title="Status Aktif" id="aktif" onclick="showAktif('+pKode+')"><i class="fa fa-check"></i></a>\n\<a href="#" class="btn btn-danger btn-xs" title="Status Nonaktif" onclick="showNonaktif('+pKode+')" id="nonaktif"><i class="fa fa-times"></i></a>';
			
			return (btn).toString();						
		  },
		  bSortable: false,
		  bSearchable: false
		  }
	   ],
	   "bDestroy": true,
	});
}
function showAktif(e){
	$.ajax({
		url: "<?php echo base_url('TA/statusaktif/')?>"+e,
		type: "post",
		success: function(){
         loaData();
		}
	});
}
function showNonaktif(e){
	$.ajax({
		url: "<?php echo base_url('TA/statusnonaktif/')?>"+e,
		type: "post",
		success: function(){
         loaData();
		}
	});
}
</script>