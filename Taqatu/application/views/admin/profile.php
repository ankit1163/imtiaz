<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
		Welcome <?php echo $result['user_name'];?>
      </h1>
      
    </section>
 <h3 style="color:green"><?php //echo $this->session->flashdata('delete_project'); ?></h3>
 <h3 style="color:green"><?php //echo $this->session->flashdata('edit_project'); ?></h3>
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
                  
                  <th>User Name</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>password</th>
                  <th>user_role</th>
                  
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        
                <tr>
                  
                  <td><?php echo $result['user_name'];?></td>
                  <td><?php echo $result["name"];?></td>
                  <td><?php echo $result["email"];?></td>
                  <td><?php echo $result["password"];?></td>
                  <td><?php echo $result["user_role"];?></td>
                
				<td>
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>||

<a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  

                </tr>
		
		
              
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