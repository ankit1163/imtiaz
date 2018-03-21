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
        <li class="active">Add home photo</li>
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
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('home_photo'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>admin/add_home_photo">
              <div class="box-body">
               
				
				
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Home Photo</label>
                  <input type="file" name="file" class="form-control">
                </div>
                
                
              </div>
              <!-- /.box-body -->
				<div class="form-group">
                  <label for="exampleInputPassword1">Please Set the image height and width respectively 956,1440 </label>
                 
                </div>
               
              </div>
              <div class="box-footer">
                <input  type="submit" name="add_home_photo" value="submit" class="btn btn-primary">
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