    <section id="main-content">
      <section class="wrapper">
        <h3> <?php echo $title; ?></h3>
        <div class="row mt">
		 <div class="col-md-5">
			<?php echo $this->session->flashdata('message'); ?>
		   </div>
		  </div>
           <div class="col-sm-5">
		    <section class="content-panel">
			   <div class="panel-body">
				  <form class="form-horizontal style-form" method="post" action="<?php echo base_url('petugas/ubahpassword')?>">
					<div class="form-group">
					  <div class="col-sm-10">
					    <label class="control-label">Current Password :</label>
						<input type="password" class="form-control" name="password">
						 <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					</div>
					 <div class="form-group">
					  <div class="col-sm-10">
					    <label class="control-label">New Password :</label>
						<input type="password" class="form-control" name="newpassword">
						 <?php echo form_error('newpassword', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					</div>
					 <div class="form-group">
					  <div class="col-sm-10">
					    <label class="control-label">Repeat Password :</label>
						<input type="password" class="form-control" name="repeatpassword">
						 <?php echo form_error('repeatpassword', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					</div>
					 <button type="submit" class="btn btn-info float-right"> Simpan</button>
				  </form>
			  </div>
		  </section>
        </div>
      </section>
    </section>
	
	