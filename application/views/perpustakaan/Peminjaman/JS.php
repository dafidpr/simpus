<script type="text/javascript">
 function showInputPinjam(){
	  $.ajax({
		  url: "<?php echo base_url('peminjaman/hapushistori')?>",
		  type: "post",
		  success: function(data){
	        loadDetil();
			document.getElementById('kodesiswa').value="";
			document.getElementById('namasiswa').value="";
			document.getElementById('kodebuku').value="";
			document.getElementById('judulbuku').value="";
			}
 	 });
	 $('#inputPeminjamanModal').modal('show');
 }
 function showHapusPinjam($id){
	 var id = $id;
     $.ajax({
		 url: "<?php echo base_url('peminjaman/detailpeminjaman/')?>"+id,
		 type: "post",
		 success: function(data){
			var obj = JSON.parse(data);
			$('#hapusdetilpinjam').val(obj.KODE_PINJAM);
		 }
	 });
	$('#hapuspeminjaman').click(function(){
		$.ajax({
			url: "<?php echo base_url('peminjaman/hapuspeminjaman/')?>"+id,
			type: "post"
		});
	});
	 $('#hapusPeminjamanModal').modal('show');
 }
 function showDetailPinjam($id){
	 var id = $id;
	 var html = '';
	 $.ajax({
		 url: "<?php echo base_url('peminjaman/detailpeminjaman/')?>"+id,
		 type: "post",
		 success: function(data){
			 var obj = JSON.parse(data);
			 for(var i = 0; i < obj.length; i++){
				 html += '<tr><td> <small class="text-dark">'+obj[i].KODE_DETIL_PINJAM+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].KODE_PINJAM+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].KODE_BUKU+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].JUDUL+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].NAMA_LNGKP+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].NAMA_PETUGAS+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].QTY_PINJAM+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].TGL_PINJAM+'</small></td>'+
						 '<td> <small class="text-dark">'+obj[i].TGL_KEMBALI+'</small></td></tr>';
			 }
			 $('#DetailPeminjamanModal').modal('show');
			 $('#detailpeminjaman').html(html);
		 }
	 });
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
 function editcarisiswa(){
	 var keysiswa = document.getElementById('editkodesiswapinjam').value;
		$.ajax({
			url: "<?php echo base_url('siswa/carisiswa/')?>"+keysiswa,
			type: "post",
			success: function(data){
				var obj = JSON.parse(data);
				$('#editidsiswapinjam').val(obj.id_siswa);
				$('#editnamasiswa').val(obj.nama_lngkp);
			}
		}); 
 }
 function caribuku(){
	var keybuku = $('#kodebuku').val();
		  $.ajax({
			  url: "<?php echo base_url('buku/caribuku/')?>"+keybuku,
			  type: "post",
			  success: function(data){
				  var obj = JSON.parse(data);
				  $('#idbuku').val(obj.id_buku);
				  $('#judulbuku').val(obj.judul);
			  }
		  }); 
 }
 function editcaribuku(){
	var keybuku = $('#editkodebuku').val();
		  $.ajax({
			  url: "<?php echo base_url('buku/caribuku/')?>"+keybuku,
			  type: "post",
			  success: function(data){
				  var obj = JSON.parse(data);
				  $('#editidbuku').val(obj.id_buku);
				  $('#editjudulbuku').val(obj.judul);
			  }
		  }); 
 }
 function loadDetil(){
	$('#listpinjam').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": '<?php echo base_url();?>peminjaman/LoadDetil',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj){uss = oObj.aData["Username"];},
		"aoColumns": [
		    {"mDataProp": "KODE_BUKU", bSearchable: true},
			{"mDataProp": "JUDUL", bSearchable: true},
			{"mDataProp": "TGL_PINJAM", bSearchable: true},
			{"mDataProp": "TGL_KEMBALI", bSearchable: true},
			{"mDataProp": function (data, type, val){
		     pKode = data.ID_DETIL_PEMINJAMAN;
              var btn = '<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusdetilpinjam('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
 }
 function tambahpinjam(){
	 var kodebuku   = document.getElementById('idbuku').value;
	 var tglpinjam  = document.getElementById('tglpinjam').value;
	 var tglkembali = document.getElementById('tglkembali').value;
	 var btn = document.getElementById('btnDisable');
	 var table = document.getElementById('listpinjam');
	 $.ajax({
	     url: "<?php echo base_url('peminjaman/inputpeminjaman/')?>"+kodebuku+'/'+tglpinjam+'/'+tglkembali,
		 type: "post",
		 success: function(data){
		    loadDetil();
		 }
	  });
	 if(table.rows.length == 3){
		 btn.disabled = true;
	 }
	 document.getElementById('kodebuku').value="";
	 document.getElementById('kodebuku').focus();
 }
 function hapusdetilpinjam(e){
	 $.ajax({
		 url: "<?php echo base_url('peminjaman/hapusdetil/')?>"+e,
		 type: "post",
		 success: function(data){
			 loadDetil(); 
		 }
	 });
	 var btn = document.getElementById('btnDisable');
	 var table = document.getElementById('listpinjam').rows.length - 2;
	 if(table < 3){
		 btn.disabled = false;
	 }
 }
 function showEditPinjam(e){
	   $('#editlistpinjam').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": '<?php echo base_url();?>peminjaman/ambilDetilData/'+e,
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj){uss = oObj.aData["Username"];},
		"aoColumns": [
		    {"mDataProp": "KODE_BUKU", bSearchable: true},
			{"mDataProp": "JUDUL", bSearchable: true},
			{"mDataProp": "TGL_PINJAM", bSearchable: true},
			{"mDataProp": "TGL_KEMBALI", bSearchable: true},
			{"mDataProp": function (data, type, val){
		     pKode = data.ID_DETIL_PEMINJAMAN;
              var btn = '<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusDataEdit('+pKode+')"><i class="fa fa-trash-o "></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="ambilDataBuku('+pKode+')"><i class="fa fa-pencil"></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   	 $.ajax({
			 url: "<?php echo base_url('peminjaman/detilpeminjam/')?>"+e,
			 type: "post",
			 success: function(data){
				 var obj = JSON.parse(data);
				$('#editidpeminjaman').val(obj.ID_PEMINJAMAN);
				$('#editidsiswapinjam').val(obj.ID_SISWA);
				$('#editkodesiswapinjam').val(obj.KODE_SISWA);
				$('#editnamasiswa').val(obj.NAMA_LNGKP);
			 }
	 });

	  $('#editPeminjamanModal').modal('show');
 }
 function hapusDataEdit(e){
	 var id =  document.getElementById('editidpeminjaman').value;
	  $.ajax({
		 url: "<?php echo base_url('peminjaman/hapusdetil/')?>"+e,
		 type: "post",
		 success: function(data){
           loadDetilEdit();
		 }
	 });
 }
 function ambilDataBuku(e){
	  $.ajax({
		 url: "<?php echo base_url('peminjaman/ambilDataPinjam/')?>"+e,
		 type: "post",
		 success: function(data){
			 var obj = JSON.parse(data);
			$('#iddetilpinjam').val(obj.ID_DETIL_PEMINJAMAN);
			$('#kodedetilpinjam').val(obj.KODE_DETIL_PINJAM);
			$('#editidpinjam').val(obj.ID_PEMINJAMAN);
			$('#editidbuku').val(obj.ID_BUKU);
			$('#editkodebuku').val(obj.KODE_BUKU);
			$('#editjudulbuku').val(obj.JUDUL);
			$('#edittglpinjam').val(obj.TGL_PINJAM);
			$('#edittglkembali').val(obj.TGL_KEMBALI);
		 }
	 });
 }
 function loadDetilEdit(){
	  var id = document.getElementById('editidpeminjaman').value;
	 	$('#editlistpinjam').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": '<?php echo base_url();?>peminjaman/loadDataEdit/'+id, 
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj){uss = oObj.aData["Username"];},
		"aoColumns": [
		    {"mDataProp": "KODE_BUKU", bSearchable: true},
			{"mDataProp": "JUDUL", bSearchable: true},
			{"mDataProp": "TGL_PINJAM", bSearchable: true},
			{"mDataProp": "TGL_KEMBALI", bSearchable: true},
			{"mDataProp": function (data, type, val){
		     pKode = data.ID_DETIL_PEMINJAMAN;
              var btn = '<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusDataEdit('+pKode+')"><i class="fa fa-trash-o "></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="ambilDataBuku('+pKode+')"><i class="fa fa-pencil"></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
 }
 function editpinjam(){
	 var iddetilpinjam   =  document.getElementById('iddetilpinjam').value;
	 var kodedetil       =  document.getElementById('kodedetilpinjam').value;
	 var idbuku          =  document.getElementById('editidbuku').value;
	 var tglpinjam       =  document.getElementById('edittglpinjam').value;
	 var tglkembali      =  document.getElementById('edittglkembali').value;
	  $.ajax({
		 url: "<?php echo base_url('peminjaman/editDataPinjam/')?>"+iddetilpinjam+'/'+idbuku+'/'+tglpinjam+'/'
		       +tglkembali,
		 type: "post",
		 success: function(data){
			 loadDetilEdit();
		 }
	 });
 }
 function caridata(){
	 var awal = $('#awal').val();
	 var akhir = $('#akhir').val();
	  $('#laporanpinjam').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>laporanpinjam/LoadData/'+awal+'/'+akhir,
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_PINJAM", bSearchable: true},
			  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
			  {"mDataProp": "NAMA_PETUGAS", bSearchable: true},
			  {"mDataProp": "QTY_PINJAM", bSearchable: true},
			  {"mDataProp": "TGL_PINJAM", bSearchable: true},
		   ],
		   "bDestroy": true,
	   });
 }
 function simpanData(){
	 var data = $('#peminjaman').serialize();
	 $.ajax({
		 url: "<?php echo base_url('peminjaman/inputdatapinjam')?>",
		 data: data,
		 type: "post",
		 success: function(){
			
		 }
	 });
	  $('#cetakPeminjamanModal').modal('show');
 }
 function batal(){
	 window.location.href = "<?php echo base_url('peminjaman/index')?>";
 }
</script> 
     