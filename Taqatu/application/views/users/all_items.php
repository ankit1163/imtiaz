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
   <center><h3 style="color:green"><?php echo $this->session->flashdata('update_item_status'); ?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('delete_item'); ?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('edit_item'); ?></h3></center>
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
                  <th>user Role</th>
                  <th>item Name</th>
                  <th>item Status</th>
                  <th>item Type</th>
				  <th>location</th>
                  <th>Duration</th>
               
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Budget</th>
                  <th>Participants</th>
                  <th>Total Area</th>
				  <th>Number of floor</th>
				  <th>Status</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
          <?php 
		   $i=0;
		  foreach($all_item as $item)
		  {
		  $i++;
		  ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $item['user_role'];?></td>
                  <td><?php echo $item['item_Name']?></td>
                  <td><?php echo $item["item_status"];?></td>
                  <td><?php echo $item["item_type"];?></td>
                  <td><?php echo $item["location"];?></td>
                  <td><?php echo $item["duration"];?></td>
                  <td><?php echo $item["start_date"];?></td>
                  <td><?php echo $item["end_date"];?></td>
                  <td><?php echo $item["budget"];?></td>
				  <td><?php echo $item["participants"];?></td>
                  <td><?php echo $item["total_area"];?></td>
                  <td><?php echo $item["floor"];?></td>
                  <td><?php echo $item["i_status"];?></td>
                <td> 
				
				<?php 
				if($item["i_status"]=="Active")
				{
					
				?>
 <a href="<?php echo base_url();?>items/update_item_status/Deactive/<?php echo $item['item_id'] ;?>">
<i class="fa fa-lock" aria-hidden="true"></i></a>||
				<?php } else { ?>
				
<a href="<?php echo base_url();?>items/update_item_status/Active/<?php echo $item['item_id'] ;?>">
<i class="fa fa-unlock" aria-hidden="true"></i></a>||

				<?php } ?>
                <a href="<?php echo base_url();?>items/delete_item/<?php echo $item['item_id'] ;?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>||

<a href="<?php echo base_url();?>items/edit_item/<?php echo $item['item_id'] ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  

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