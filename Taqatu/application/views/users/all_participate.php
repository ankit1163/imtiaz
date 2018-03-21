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
        <li class="active">All participate</li>
      </ol>
    </section>
  
  <center><h3 style="color:green"><?php echo $this->session->flashdata('delete_participate'); ?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_participate'); ?></h3></center>
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
                
                  <th>Project Name</th>
                  <th>project Status</th>
                  <th>Project Type</th>
				  <th>Participants</th>
				  <th>Participants Role</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
          <?php 
		  $i=0;
		if(!empty($all_participate)){
		  foreach($all_participate as $participate)
		  {
			  foreach($participate as $part)
		  {
			
		  $i++;
		  ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $part['project_Name'];?></td>
                  <td><?php echo $part['project_status']?></td>
                  <td><?php echo $part['project_type'];?></td>
                  <td><?php echo $part['user_name'];?></td>
                  <td><?php echo $part['role'];?></td>
                 
                <td> 
<a href="<?php echo base_url();?>projects/delete_participate/<?php echo $part['id'] ;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>||
<a href="<?php echo base_url();?>projects/edit_participate/<?php echo $part['id'] ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
				</td>
                  

                </tr>
		
		<?php } } } ?>
              
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