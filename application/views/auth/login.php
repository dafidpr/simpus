  <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo base_url('auth')?>" method="post">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
		<?php echo $this->session->flashdata('message'); ?>
          <input type="text" class="form-control" placeholder="Enter Email.." autofocus name="email">
		   <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password">
            <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
          <button class="btn btn-theme btn-block mt"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
        </div>
      </form>
    </div>
  </div>

