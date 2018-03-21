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
        <li class="active">General Elements</li>
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
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_item'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" method="post" action="<?php echo base_url();?>items/edit_item/<?php echo $result['item_id']; ?>">
			<?php //print_r($result);?>
				<div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputPassword1">Users Role</label>
				  
                  <select  class="form-control" name="user_role" >
				  
				  <option>--Select User type--</option>
				    <option <?php echo $result['user_role'] == 'OWNER' ? 'selected="selected"' :'' ;?> value="OWNER">OWNER</option>
				    <option <?php echo $result['user_role'] == 'BUILDER' ? 'selected="selected"' :'' ;?> value="BUILDER">BUILDER</option>
				    <option <?php echo $result['user_role'] == 'ITEAM PROVIDER' ? 'selected="selected"' :'' ;?> value="ITEAM PROVIDER">ITEAM PROVIDER</option>
				    <option <?php echo $result['user_role'] == 'SERVICCES' ? 'selected="selected"' :'' ;?> value="SERVICCES">SERVICCES</option>
				    <option <?php echo $result['user_role'] == 'PROVIDER' ? 'selected="selected"' :'' ;?> value="PROVIDER">PROVIDER</option>
				    <option <?php echo $result['user_role'] == 'MANAGER' ? 'selected="selected"' :'' ;?> value="MANAGER">MANAGER</option>
				    <option <?php echo $result['user_role'] == 'OTHER' ? 'selected="selected"' :'' ;?> value="OWNER">OTHER</option>
				   
				
				  </select>
                </div>
				
                
				 <div class="form-group">
                  <label for="exampleInputPassword1">*item Name</label>
                  <input type="text" name="item_Name" class="form-control" id="exampleInputPassword1" placeholder="*item Name" value="<?php echo $result['item_Name'];?>" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*item Status</label>
                  <input type="text" name="item_status" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['item_status'];?>" >
                </div>
				
				
				
				
				<div class="form-group">
                  <label for="exampleInputPassword1">item Type</label>
                  <select  class="form-control" name="item_type">
				  
				  <option>--Select items Type--</option>
				  <option <?php echo $result['item_type'] == 'HOUSE' ? 'selected="selected"' :'' ;?> value="HOUSE">HOUSE</option>
				  <option <?php echo $result['item_type'] == 'APARTMENT' ? 'selected="selected"' :'' ;?> value="APARTMENT">APARTMENT</option>
				  <option <?php echo $result['item_type'] == 'RESTURENT' ? 'selected="selected"' :'' ;?> value="HOUSE">RESTURENT</option>
				  <option <?php echo $result['item_type'] == 'HOSPITAL' ? 'selected="selected"' :'' ;?> value="HOUSE">HOSPITAL</option>
				  <option <?php echo $result['item_type'] == 'OTHER' ? 'selected="selected"' :'' ;?> value="HOUSE">OTHER</option>
				
				
				  </select>
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Location</label>
                  <input type="text" name="location" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['location'];?>" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Duration</label>
                  <input type="text" name="duration" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['duration'];?>" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Start Date</label>
                  <input type="text" name="start_date" class="form-control" id="datepicker" placeholder="*Start Date" value="<?php echo $result['start_date'];?>" >
                </div> 
				<div class="form-group">
                  <label for="exampleInputPassword1">*End Date</label>
                  <input type="text" name="end_date" class="form-control" id="datepicker1" placeholder="*End Date"  value="<?php echo $result['end_date'];?>">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Budget</label>
                  <input type="text" name="budget" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['budget'];?>" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Participants</label>
                  <input type="text" name="participants" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['participants'];?>" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Total Area</label>
                  <input type="text" name="total_area" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['total_area'];?>" >
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">*Number of Floor</label>
                  <input type="number" min=0 max=100  name="floor" class="form-control" id="exampleInputPassword1" placeholder="*item status" value="<?php echo $result['floor'];?>" >
                </div>
				
				
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" name="edit_item" value="update" class="btn btn-primary">
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