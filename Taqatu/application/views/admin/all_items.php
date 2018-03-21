<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
   <center><h3 style="color:green"><?php echo $this->session->flashdata('update_project_status'); ?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('delete_project'); ?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_project'); ?></h3></center>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               <tr>
                  <th>#</th>
                  <th>Item Title</th>
                  <th>Status</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
          <?php 
		  $i=0;
		  foreach($admin_allitem as $adminallitem)
		  {
		  $i++;
		  ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $adminallitem['item_title'];?></td>
                  <td><?php echo $adminallitem["item_status"];?></td>
                <td> 
				
				<?php /*
				if($adminallitem["item_status"]=="Active")
				{
					
				?>
 <a href="<?php echo base_url();?>items/update_project_status/Deactive/<?php echo $adminallitem['p_id'] ;?>">
<i class="fa fa-lock" aria-hidden="true"></i></a>||
				<?php } else { ?>
				
<a href="<?php echo base_url();?>items/update_project_status/Active/<?php echo $adminallitem['p_id'] ;?>">
<i class="fa fa-unlock" aria-hidden="true"></i></a>||

				<?php } */?>
                <a href="<?php echo base_url();?>items/admin_deleteitem/<?php echo $adminallitem['item_id'] ;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>||

<a href="<?php echo base_url();?>items/admin_edititem/<?php echo $adminallitem['item_id'] ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  

                </tr>
		
		  <?php } ?>
              
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>