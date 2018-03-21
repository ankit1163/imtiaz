

    <div class="container">
   <div class="row content-page" >
	 <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
	   <form role="form" method="post" action="<?php echo base_url();?>projects/update_project_location">
   	 <div class="form-group">
                  <label for="exampleInputPassword1">*Location</label>
                  <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				<input type="hidden" value="<?php echo $project_id; ?>" name="p_id">
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>

    </div>
    </div>
    </div>
    </div>
    </div>
   
 

 
