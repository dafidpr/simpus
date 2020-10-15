
</section>

  <script src="<?php echo base_url('assets/')?>lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url('assets/')?>lib/jquery.dcjqaccordion.2.7.js"></script>
  
  <script src="<?php echo base_url('assets/')?>lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/')?>lib/common-scripts.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>DataTables/datatables.min.js"></script>
  <script src="<?php echo base_url('assets/')?>lib/chart.js/Chart.min.js"></script>

  <script>
   $(document).ready(function(){
	   var tableBuku = $('#databuku').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>buku/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_BUKU", bSearchable: true},
			  {"mDataProp": "JUDUL", bSearchable: true},
			  {"mDataProp": "PENULIS", bSearchable: true},
			  {"mDataProp": "ISBN", bSearchable: true},
			  {"mDataProp": "PENERBIT", bSearchable: true},
			  {"mDataProp": "KATEGORI_BUKU", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_BUKU;
                var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showDetailBuku('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditBuku('+pKode+')"><i class="fa fa-pencil"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusBuku('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tablePetugas = $('#datapetugas').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>petugas/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_PETUGAS", bSearchable: true},
			  {"mDataProp": "NAMA_PETUGAS", bSearchable: true},
			  {"mDataProp": "NIP", bSearchable: true},
			  {"mDataProp": "JDWL_TUGAS", bSearchable: true},
			  {"mDataProp": "LEVEL", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_PETUGAS;
                var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showPetugasDetail('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showPetugasEdit('+pKode+')"><i class="fa fa-pencil"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusPetugas('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tableSiswa = $('#datasiswa').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>siswa/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_SISWA", bSearchable: true},
			  {"mDataProp": "NISN", bSearchable: true},
			  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
			  {"mDataProp": "BDG_STUDI_KEAHLIAN", bSearchable: true},
			  {"mDataProp": "JNS_KELAMIN", bSearchable: true},
			  {"mDataProp": "ASAL_SEKOLAH", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_SISWA;
                var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showSiswaDetail('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showSiswaEdit('+pKode+')"><i class="fa fa-pencil"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showSiswaHapus('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tableDenda = $('#datadenda').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>denda/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "ID_DENDA", bSearchable: true},
			  {"mDataProp": "DENDA", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_DENDA;
                var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditDenda('+pKode+')"><i class="fa fa-pencil"></i></a> \n\<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusDenda('+pKode+')"><i class="fa fa-trash"></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
		});
	   var tablePinjam = $('#datapinjam').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>peminjaman/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_PINJAM", bSearchable: true},
			  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
			  {"mDataProp": "NAMA_PETUGAS", bSearchable: true},
			  {"mDataProp": "QTY_PINJAM", bSearchable: true},
			  {"mDataProp": "TGL_KEMBALI", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_PEMINJAMAN;
                var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showDetailPinjam('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditPinjam('+pKode+')"><i class="fa fa-pencil"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusPinjam('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tableKembali = $('#datakembali').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>pengembalian/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_KEMBALI", bSearchable: true},
			  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
			  {"mDataProp": "NAMA_PETUGAS", bSearchable: true},
			  {"mDataProp": "QTY_KEMBALI", bSearchable: true},
			  {"mDataProp": "TGL_PENGEMBALIAN", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_PENGEMBALIAN;
                var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showDetail('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapus('+pKode+')"><i class="fa fa-trash-o "></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tableKelas = $('#datakelas').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>kelas/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
		      {"mDataProp": "KODE_KELAS", bSearchable: true},
			  {"mDataProp": "KELAS", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_KELAS;
                var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditKelas('+pKode+')"><i class="fa fa-pencil"></i></a> \n\<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusKelas('+pKode+')"><i class="fa fa-trash"></i></a>';
				
                return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	   });
	   var tableGuru = $('#dataguru').DataTable({
	   "bProcessing": true,
	   "bJQueryUI": true,
	   "sPaginationType": "full_numbers",
	   "sAjaxSource": '<?php echo base_url();?>guru/LoadData',
	   "sAjaxDataProp": "aaData",
	   "fnRender": function (oObj){uss = oObj.aData["Username"];},
	   "aoColumns": [
		  {"mDataProp": "KODE_GURU", bSearchable: true},
		  {"mDataProp": "NAMA_GURU", bSearchable: true},
		  {"mDataProp": "NIP", bSearchable: true},
		  {"mDataProp": "JNS_KELAMIN", bSearchable: true},
		  {"mDataProp": "EMAIL", bSearchable: true},
		  {"mDataProp": function (data, type, val){
			pKode = data.ID_GURU;
			var btn = '<a href="#" class="btn btn-success btn-xs" title="Detail Data" onclick="showDetailGuru('+pKode+')"><i class="fa fa-list-ul"></i></a> \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="showEditGuru('+pKode+')"><i class="fa fa-pencil"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="showHapusGuru('+pKode+')"><i class="fa fa-trash-o "></i></a>';
			
			return (btn).toString();						
		  },
		  bSortable: false,
		  bSearchable: false
		  }
	   ],
	   "bDestroy": true,
   });
	   var tableAjaran = $('#dataajaran').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>TA/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
			  {"mDataProp": "kode_ta", bSearchable: true},
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
	   var tableSiswaKelas = $('#datasiswakelas').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>siswakelas/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
			  {"mDataProp": "NISN", bSearchable: true},
			  {"mDataProp": "NAMA_LNGKP", bSearchable: true},
			  {"mDataProp": "JNS_KELAMIN", bSearchable: true},
			  {"mDataProp": "KELAS", bSearchable: true},
			  {"mDataProp": "THN_AJARAN", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_KELAS_SISWA;
				var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editSiswaKelas('+pKode+')"><i class="fa fa-pencil"></i></a> \n\<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusSiswaKelas('+pKode+')"><i class="fa fa-trash"></i></a>';
				
				return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	 });
	   var tableWali = $('#datawalikelas').DataTable({
		   "bProcessing": true,
		   "bJQueryUI": true,
		   "sPaginationType": "full_numbers",
		   "sAjaxSource": '<?php echo base_url();?>walikelas/LoadData',
		   "sAjaxDataProp": "aaData",
		   "fnRender": function (oObj){uss = oObj.aData["Username"];},
		   "aoColumns": [
			  {"mDataProp": "NIP", bSearchable: true},
			  {"mDataProp": "NAMA_GURU", bSearchable: true},
			  {"mDataProp": "JNS_KELAMIN", bSearchable: true},
			  {"mDataProp": "KELAS", bSearchable: true},
			  {"mDataProp": "THN_AJARAN", bSearchable: true},
			  {"mDataProp": function (data, type, val){
				pKode = data.ID_WK;
				var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editWaliKelas('+pKode+')"><i class="fa fa-pencil"></i></a> \n\<a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusWaliKelas('+pKode+')"><i class="fa fa-trash"></i></a>';
				
				return (btn).toString();						
			  },
			  bSortable: false,
			  bSearchable: false
			  }
		   ],
		   "bDestroy": true,
	});
	   grafikpeminjaman();
	   grafikpengembalian();
 })
</script>
</body>
</html>
