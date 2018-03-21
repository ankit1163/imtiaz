<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php //echo $user_detail['name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li class="active treeview">
          <a href="<?php echo base_url();?>admin/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
           
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
     <i class="fa fa-picture-o" aria-hidden="true"></i>
            <span>Home Images</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>admin/add_home_photo"><i class="fa fa-circle-o"></i>Add home photo</a></li>
            <li><a href="<?php echo base_url();?>admin/all_home_photo"><i class="fa fa-circle-o"></i>All Home photo</a></li>
          
          
          </ul>
        </li>
		
		
      
      </ul>
	  
    </section>
    <!-- /.sidebar -->
  </aside>
