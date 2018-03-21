<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Update Participate
        <small>users</small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_project'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
			
        
			  <form role="form" method="post" action="<?php echo base_url();?>projects/edit_participate/<?php echo $result['id']; ?>">
		    	<div class="form-group">
	<input type="hidden" id="p_id4" value="<?php echo $result['id']; ?>" name="p_id"/>
	<label for="exampleInputPassword1">User Role</label>
                  <select  class="form-control" name="role" id="role"  >
				  <option>--Select Projects Type--</option>
				 
				    <option <?php echo $result['role'] == 'MANAGER' ? 'selected="selected"' :'' ;?> value="MANAGER">MANAGER</option>
				  <option <?php echo $result['role'] == 'BUILDER' ? 'selected="selected"' :'' ;?> value="BUILDER">BUILDER</option>
			 
				  </select>
                </div>
   	 <div class="form-group">
	 
                  <label for="exampleInputPassword1">Participate</label>
				  <select  class="form-control" name="add_users" id="add_user"  >
				  <?php foreach($userss as $user){
						if($user['u_id'] == $result['add_users'] ) { 
						  ?>
				  <option value="<?php echo $user['u_id'];?>" selected><?php echo $user['user_name'];?></option>
				 
			
				 
						<?php } else {?>
						                             
				  <option value="<?php echo $user['u_id'];?>"><?php echo $user['user_name'];?></option>
				 
				 
				
					  <?php } } ?>
					    </select>
					
					 
					
					
                </div>
				
				<input  type="submit" name="edit_participate" value="update" class="btn btn-primary">
				</form>
          </div>
        
        </div>
    
      </div>
 
    </section>
  </div>
 