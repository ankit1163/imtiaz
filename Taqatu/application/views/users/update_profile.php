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
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_profile'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
			<?php 
			print_r($result);
			?>
            <form role="form" method="post" action="<?php echo base_url();?>profile/update_profile/<?php echo $result['u_id']; ?>">
			<?php //print_r($result);?>
				<div class="box-body">
                 
				
                
				 <div class="form-group">
                  <label for="exampleInputPassword1">*User Name</label>
                  <input type="text" name="article_Name" class="form-control" id="exampleInputPassword1" placeholder="*article Name" value="" >
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">*Email</label>
                  <input type="text" name="article_status" class="form-control" id="exampleInputPassword1" placeholder="*article status" value="" >
                </div>
				
								 
				
				
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" name="edit_article" value="update" class="btn btn-primary">
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