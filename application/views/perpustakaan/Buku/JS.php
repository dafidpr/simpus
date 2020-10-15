<script type="text/javascript">
function showInputBuku(){
	  $('#inputBukuModal').modal('show');
  }
function showDetailBuku($id){	
	  var id = $id;
	   $.ajax({
		  url: "<?php echo base_url('buku/detailbuku/')?>"+id,
		  type: "post",
		  success: function(data){
		   var obj = JSON.parse(data);
			$('#detilidbuku').val(obj.KODE_BUKU);
			$('#detiljudul').val(obj.JUDUL);
			$('#detilthnTerbit').val(obj.TH_TERBIT);
			$('#detilpenulis').val(obj.PENULIS);
			$('#detilpenerbit').val(obj.PENERBIT);
			$('#detiltmptTerbit').val(obj.TMPT_TERBIT);
			$('#detilisbn').val(obj.ISBN);
			$('#detilhalaman').val(obj.HALAMAN);
			$('#detilberat').val(obj.BERAT);
			$('#detilcetakan').val(obj.CETAKAN);
			$('#detilukuran').val(obj.UKURAN);
			$('#detilkategori').val(obj.KATEGORI_BUKU);
			$('#detiljmlBuku').val(obj.JML_BUKU);
			$('#detailBukuModal').modal('show');		
		   
		  },error: function(jqXHR, textStatus, errorThrown){
			  
			alert('Erorr'+jqXHR.status);
		  }
	  })
  }
function showEditBuku($id){  
	 var id = $id;
	   $.ajax({
		  url: "<?php echo base_url('buku/detailbuku/')?>"+id,
		  type: "post",
		  success: function(data){
		   var obj = JSON.parse(data);
			$('#editidbuku').val(obj.ID_BUKU);
			$('#editkodebuku').val(obj.KODE_BUKU);
			$('#editjudul').val(obj.JUDUL);
			$('#editthnTerbit').val(obj.TH_TERBIT);
			$('#editpenulis').val(obj.PENULIS);
			$('#editpenerbit').val(obj.PENERBIT);
			$('#edittmptTerbit').val(obj.TMPT_TERBIT);
			$('#editisbn').val(obj.ISBN);
			$('#edithalaman').val(obj.HALAMAN);
			$('#editberat').val(obj.BERAT);
			$('#editcetakan').val(obj.CETAKAN);
			$('#editukuran').val(obj.UKURAN);
			$('#editkategori').val(obj.KATEGORI_BUKU);
			$('#editjmlBuku').val(obj.JML_BUKU);
			$('#editBukuModal').modal('show');		
		   
		  },error: function(jqXHR, textStatus, errorThrown){
			  
			alert('Erorr'+jqXHR.status);
		  }
	  })
	  $('#editbuku').click(function(){
		  var id = $id;
		  $.ajax({
			  url: "<?php echo base_url('buku/editbuku/')?>"+id,
			  type: "post",
		  });
	  });
  }
function showHapusBuku($id){
	var id = $id;
	   $.ajax({
		  url: "<?php echo base_url('buku/detailbuku/')?>"+id,
		  type: "post",
		  success: function(data){
		   var obj = JSON.parse(data);
			$('#hapusidbuku').val(obj.ID_BUKU);
		  }
		});
	  $('#hapusbuku').click(function(){
		  $.ajax({
			  url: "<?php echo base_url('buku/hapusbuku/')?>"+id,
			  type: "post",
		  });
	  });
	  $('#hapusBukuModal').modal('show');
  }
</script>