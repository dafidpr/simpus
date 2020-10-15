 <script type="text/javascript">
     function showDetail($id){
		 var id = $id;
		 var html = '';
		 $.ajax({
			 url: "<?php echo base_url('pengembalian/detailpengembalian/')?>"+id,
			 type: "post",
			 success: function(data){
				var obj = JSON.parse(data); 
				for (var i=0; i < obj.length; i++) { 
					html += '<tr><td> <small class="text-dark">'+obj[i].KODE_DETIL_KEMBALI+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].KODE_PINJAM+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].KODE_BUKU+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].JUDUL+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].NAMA_LNGKP+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].NAMA_PETUGAS+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].QTY_KEMBALI+'</small></td>'+
							'<td> <small class="text-dark">'+obj[i].DENDA+'</small></td></tr>';
				}		
				$('#DetailPengembalianModal').modal('show');
				$('#detailpengembalian').html(html);
			 }
		 })
	 }
	 function loadDetilKembali(){
       	$('#listkembali').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": '<?php echo base_url();?>pengembalian/LoadDetil',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj){uss = oObj.aData["Username"];},
		"aoColumns": [
		    {"mDataProp": "KODE_BUKU", bSearchable: true},
			{"mDataProp": "JUDUL", bSearchable: true},
			{"mDataProp": "DENDA", bSearchable: true},
		   ],
		   "bDestroy": true,
	   });
	 }
	 function showHapus($id){
		 var id = $id;
		 $('#hapuspengembalian').click(function(){
			$.ajax({
				url: "<?php echo base_url('pengembalian/hapuspengembalian/')?>"+id,
				type: "post",
			}) 
		 });
		 $('#hapusPengembalianModal').modal('show');
	 }
	/* function showEdit(e){
		$('#listeditkembali').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": '<?php echo base_url();?>pengembalian/ambilDetilData/'+e,
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj){uss = oObj.aData["Username"];},
		"aoColumns": [
		    {"mDataProp": "KODE_BUKU", bSearchable: true},
			{"mDataProp": "JUDUL", bSearchable: true},
			{"mDataProp": "DENDA", bSearchable: true},
			{"mDataProp": function (data, type, val){
		     pKode = data.ID_DETIL_PENGEMBALIAN;
              var btn = '<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusdetilkembali('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   	 $.ajax({
			 url: "<?php echo base_url('pengembalian/ambilDataPinjam/')?>"+e,
			 type: "post",
			 success: function(data){
			  var obj = JSON.parse(data);
			  $('#editidtransaksi').val(obj.ID_PEMINJAMAN);
			  $('#editkodetransaksi').val(obj.KODE_PINJAM);
			  $('#editidsiswakembali').val(obj.ID_SISWA);
			  $('#editkodesiswakembali').val(obj.KODE_SISWA);
			  $('#editnamasiswakembali').val(obj.NAMA_LNGKP);
			 }
 		 });
	   
		 $('#editKembaliModal').modal('show');
	 }*/
	 function showInputKembali(){
		 $.ajax({
			 url: "<?php echo base_url('pengembalian/hapushistori')?>",
			 type: "post",
			 success: function(data){
				loadDetilKembali();
				document.getElementById('kodetransaksikembali').value="";
				document.getElementById('kodesiswakembali').value="";
				document.getElementById('namasiswakembali').value="";
				document.getElementById('namasiswakembali').value="";
				document.getElementById('totaldenda').value="";
			 }
 		 });
		 $('#TransaksiKembaliModal').modal('show');
	 }
	 function caridata(){
		 var keyword     = document.getElementById('kodetransaksikembali').value;
		 var kodepetugas = document.getElementById('idpetugaskembali').value;
		 var kodesiswa   = document.getElementById('idsiswakembali').value;
		 var kodepinjam  = document.getElementById('idtransaksikembali').value;
			$.ajax({
				url: "<?php echo base_url('pengembalian/caridata/')?>"+keyword,
				type: "post",
				success: function(data){
					var obj = JSON.parse(data);
					$('#idtransaksikembali').val(obj.ID_PEMINJAMAN);
					$('#idsiswakembali').val(obj.ID_SISWA);
					$('#kodesiswakembali').val(obj.KODE_SISWA);
					$('#namasiswakembali').val(obj.NAMA_LNGKP);
				}
			}); 
			$.ajax({
				url: "<?php echo base_url('pengembalian/inputpengembalian/')?>"+keyword,
				type: "post",
				success: function(data){
				  loadDetilKembali();
				  var obj = JSON.parse(data);
				  $('#totaldenda').val(obj.total);
				}
			}); 
	 }
	 function bayardendakembali(){
		 var total = document.getElementById('totaldenda').value;
		 var tunai = document.getElementById('bayar').value;
		 var hasil = tunai - total;
		 document.getElementById('kembali').value = hasil;
	 }
	function caridatakembali(){
		 var awal = $('#awal').val();
		 var akhir = $('#akhir').val();
		  $('#laporankembali').DataTable({
			   "bProcessing": true,
			   "bJQueryUI": true,
			   "sPaginationType": "full_numbers",
			   "sAjaxSource": '<?php echo base_url();?>laporankembali/LoadData/'+awal+'/'+akhir,
			   "sAjaxDataProp": "aaData",
			   "fnRender": function (oObj){uss = oObj.aData["Username"];},
			   "aoColumns": [
				  {"mDataProp": "KODE_KEMBALI", bSearchable: true},
				  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
				  {"mDataProp": "NAMA_PETUGAS", bSearchable: true},
				  {"mDataProp": "QTY_KEMBALI", bSearchable: true},
				  {"mDataProp": "TGL_PENGEMBALIAN", bSearchable: true},
			   ],
			   "bDestroy": true,
		   });
 }
 function simpanKembali(){
	 var data = $('#pengembalian').serialize();
	 var total   = $('#totaldenda').val();
	 var bayar   = $('#bayar').val();
	 var kembali = $('#kembali').val();
	 $.ajax({
		 url: "<?php echo base_url('pengembalian/inputdatakembali')?>",
		 data: data,
		 type: "post",
	 });
	 $('#cetaktotal').val(total);
	 $('#cetakbayar').val(bayar);
	 $('#cetakkembali').val(kembali);
	 
	  $('#cetakPengembalianModal').modal('show');
 }
 function batalcetak(){
	 window.location.href = "<?php echo base_url('pengembalian/index')?>";
 }
  </script>
