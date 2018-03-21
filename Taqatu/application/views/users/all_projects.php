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
        <li class="active">All project</li>
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
                  
                  <th>Project Name</th>
                  <th>project Status</th>
                  <th>Project Type</th>
				  <th>location</th>
                  <th>Duration</th>
               
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Budget</th>
                 
                  <th>Total Area</th>
				  <th>Number of floor</th>
				  <th>Status</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
          <?php 
		  $i=0;
		  foreach($all_project as $project)
		  {
		  $i++;
		  ?>
                <tr>
                  <td><?php echo $i; ?></td>
                 
                  <td><?php echo $project['project_Name']?></td>
                  <td><?php echo $project["project_status"];?></td>
                  <td><?php echo $project["project_type"];?></td>
                  <td><?php echo $project["location"];?></td>
                  <td><?php echo $project["duration"];?></td>
                  <td><?php echo $project["start_date"];?></td>
                  <td><?php echo $project["end_date"];?></td>
                  <td><?php echo $project["budget"];?></td>
				                         
                  <td><?php echo $project["total_area"];?></td>
                  <td><?php echo $project["floor"];?></td>
                  <td><?php echo $project["p_status"];?></td>
                <td> 
				
				<?php 
				if($project["p_status"]=="Active")
				{
					
				?>
 <a href="<?php echo base_url();?>projects/update_project_status/Deactive/<?php echo $project['p_id'] ;?>">
<i class="fa fa-lock" aria-hidden="true"></i></a>||
				<?php } else { ?>
				
<a href="<?php echo base_url();?>projects/update_project_status/Active/<?php echo $project['p_id'] ;?>">
<i class="fa fa-unlock" aria-hidden="true"></i></a>||

				<?php } ?>
                <a href="<?php echo base_url();?>projects/delete_project/<?php echo $project['p_id'] ;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>||

<a href="<?php echo base_url();?>projects/edit_project/<?php echo $project['p_id'] ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  

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