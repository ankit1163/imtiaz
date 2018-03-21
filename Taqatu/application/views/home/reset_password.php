 <div class="section-reset container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-5">

                    <div class="alert text-center register-panel" role="alert">
                        <h4 class="alert-heading">Reset password</h4>
                        <hr>
                        <p>Enter Your reset  password.</p>
                    </div>
                    <div class="clearfix">
					<?php
  header('Refresh:5; url= '. base_url().'home'); 
  echo $this->session->flashdata('set_password');
?>
					 <center><h3 style="color:green"><?php echo $this->session->flashdata('set_password'); ?></h3></center>
				
					</div>
                     <form role="form" method="post" action="<?php echo base_url();?>home/setting_password">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="password" name="passsword">
                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $user_id; ?>">
                            <small class="form-text text-muted"></small>

                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>