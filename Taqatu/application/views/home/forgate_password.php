 <div class="section-reset container">
            <div class="row justify-content-md-center">
                <div class="col-xs-12 col-sm-5">

                    <div class="alert text-center register-panel" role="alert">
                        <h4 class="alert-heading">Reset password</h4>
                        <hr>
                        <p>Enter Your email address and we'll send the link to reset your password.</p>
                    </div>
                    <div class="clearfix">
						 <center><h3 style="color:green"><?php echo $this->session->flashdata('check_email'); ?></h3></center>
					</div>
                     <form role="form" method="post" action="<?php echo base_url();?>home/doforget">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <small class="form-text text-muted">Password reset instructions will be sent to your registered email address.</small>

                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>