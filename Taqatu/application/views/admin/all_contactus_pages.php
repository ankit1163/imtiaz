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
        <li class="active">Contact pages</li>
      </ol>
    </section>
 <center><h3 style="color:green"><?php echo $this->session->flashdata('all_contactus_pages');?></h3></center>
  <center><h3 style="color:green"><?php echo $this->session->flashdata('contactus_delete');?></h3></center>
  <center><h3 style="color:green"><?php //echo $this->session->flashdata('update_vehicle_type');?></h3></center>

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
                  <th>Contactus photo</th>
                  <th>Status</th>
                  
                  <th>Action</th>
                 
                </tr>
				
                </thead>
                <tbody>
              
           <?php 
		   
		     
		              $i=0;
                    foreach($all_contactus_pages as $contactus_pages)
					{
                    $i++;

		   ?>
                <tr> 
				   <td><?php echo $i;?></td> 
				   <td><img src="<?php echo base_url();?>pages_image/<?php echo $contactus_pages['uper_image'];?>" alt="" height="42" width="42"></td>
				
                  <td><?php echo $contactus_pages['status'];?></td>
               
                  
                  
                  
                  
                  
                  <td>
				    <?php  
					
					if($contactus_pages["status"]=="Active")
					{
					
					?> 
		
                  
<a href="<?php echo base_url();?>pages/update_contactus_status/Deactive/<?php echo $contactus_pages["c_id"];?>">
<i class="fa fa-lock" aria-hidden="true"></i></a>||


       

   <?php } else { ?>	   
				
<a href="<?php echo base_url();?>pages/update_contactus_status/Active/<?php echo $contactus_pages['c_id'];?>">
<i class="fa fa-unlock" aria-hidden="true"></i></a>||	

 
				
   <?php  } ?>	




<a href="<?php echo base_url();?>pages/delete_contactus_status/<?php echo $contactus_pages['c_id']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
<td>
           


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