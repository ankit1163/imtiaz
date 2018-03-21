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
        <li class="active">Add contactus</li>
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
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('add_contactus_page'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post"  enctype="multipart/form-data" action="<?php echo base_url();?>pages/add_contactus_page">
              <div class="box-body">
               
				
				
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Contactus image</label>
                  <input type="file" name="file" class="form-control">
                </div>
                
                
              </div>
			  <div class="form-group">
                  <label for="exampleInputPassword1">Please set the height and width of image before uploading width = 2880,height =980</label>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" name="add_contactus_page" value="submit" class="btn btn-primary">
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