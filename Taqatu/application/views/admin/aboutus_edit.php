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
        <li class="active">Edit about us</li>
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
			
			 <center><h3 style="color:green"><?php echo $this->session->flashdata('aboutus_edit'); ?></h3></center>
            <!-- /.box-header -->
            <!-- form start -->
			
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url();?>pages/update_aboutus_page">
			<input type="hidden" name="old_image" value="<?php echo $result['uper_image'];?>"/>
			<input type="hidden" name="a_id" value="<?php echo $result["a_id"];?>"/>
				<div class="box-body">
                <img src="<?php echo base_url();?>pages_image/<?php echo $result['uper_image'];   ?>" height="100px" width="200px">
                <div class="form-group">
                  <label for="exampleInputPassword1">Aboutus image</label>
                  <input type="file" name="file" class="form-control">
                </div>
				 
				  <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
           
                    <textarea id="editor1" name="about_content" rows="10" cols="80">
                                          <?php echo $result['content'];?>
                    </textarea>
              
            </div>
          </div>
				
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" name="aboutus_edit" value="update" class="btn btn-primary">
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
	 <link rel="stylesheet" href="<?php echo base_url();?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	 <script src="<?php echo base_url();?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/bower_components/ckeditor/ckeditor.js"></script>
	
	<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
  </div>
  