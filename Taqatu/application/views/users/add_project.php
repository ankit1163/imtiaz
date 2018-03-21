<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Add project</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('add_project'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url();?>projects/add_project">
              <div class="box-body">
                 <!--div class="form-group">
                  <label for="exampleInputPassword1">Users Role</label>
                  <select  class="form-control" name="user_role">
				  
				  <option>--Select User type--</option>
				    <option value="OWNER">OWNER</option>
				    <option value="BUILDER">BUILDER</option>
				    <option value="ITEAM PROVIDER">ITEAM PROVIDER</option>
				    <option value="SERVICCES">SERVICCES</option>
				    <option value="PROVIDER">PROVIDER</option>
				    <option value="MANAGER">MANAGER</option>
				    <option value="OWNER">OTHER</option>
				   
				
				  </select>
                </div-->
				
                
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Project Name</label>
                  <input type="text" name="project_Name" class="form-control" id="exampleInputPassword1" placeholder="*Project Name" >
                </div>
				 <!--div class="form-group">
                  <label for="exampleInputPassword1">*Project Status</label>
                  <input type="text" name="project_status" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div-->
				
				
				
				
				<!--div class="form-group">
                  <label for="exampleInputPassword1">Project Type</label>
                  <select  class="form-control" name="project_type">
				  
				  <option>--Select Projects Type--</option>
				  <option value="HOUSE">HOUSE</option>
				  <option value="APARTMENT">APARTMENT</option>
				  <option value="HOUSE">RESTURENT</option>
				  <option value="HOUSE">HOSPITAL</option>
				  <option value="HOUSE">OTHER</option>
				
				
				  </select>
                </div-->
				 <!--div class="form-group">
                  <label for="exampleInputPassword1">*Location</label>
                  <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Duration</label>
                  <input type="text" name="duration" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Start Date</label>
                  <input type="text" name="start_date" class="form-control" id="datepicker" placeholder="*Start Date" >
                </div> 
				<div class="form-group">
                  <label for="exampleInputPassword1">*End Date</label>
                  <input type="text" name="end_date" class="form-control" id="datepicker1" placeholder="*End Date" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Budget</label>
                  <input type="text" name="budget" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Participants</label>
                  <input type="text" name="participants" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Total Area</label>
                  <input type="text" name="total_area" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Number of Floor</label>
                  <input type="number" min=0 max=100  name="floor" class="form-control" id="exampleInputPassword1" placeholder="*project status" >
                </div-->
				
				
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" name="add_project" value="submit" class="btn btn-primary">
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
          <!-- /.box -->

         
          <!-- /.box -->

          <!-- Input addon -->
         
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(function () {
		// alert("here");
   $('#datepicker').datepicker({
      autoclose: true
    })
	  })
  </script>
  <script>
    $(function () {
		// alert("here");
   $('#datepicker1').datepicker({
      autoclose: true
    })
	  })
  </script>