<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p><?php //echo $user_detail['name'];?></p>
        
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
	 
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo base_url();?>">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Go to Home</span>
            
          </a>
         
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url();?>user/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>user/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
           
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Projects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>projects/add_project"><i class="fa fa-circle-o"></i>Add projects</a></li>
            <li><a href="<?php echo base_url();?>projects/all_projects"><i class="fa fa-circle-o"></i>All Projects</a></li>
          
          
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Participate</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?php echo base_url();?>projects/all_participate"><i class="fa fa-circle-o"></i>All Participate</a></li>
          
          
          </ul>
        </li>
		 <!--li class="treeview">
          <a href="#">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>items/add_item"><i class="fa fa-circle-o"></i>Add item</a></li>
            <li><a href="<?php //echo base_url();?>items/all_user_items"><i class="fa fa-circle-o"></i>All items</a></li>
          
          
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>articles/add_article"><i class="fa fa-circle-o"></i>Add article</a></li>
            <li><a href="<?php //echo base_url();?>articles/all_articles"><i class="fa fa-circle-o"></i>All articles</a></li>
          
          
          </ul>
        </li-->
		 <li>
          <a href="<?php echo base_url();?>login/logout">
  <i class="fa fa-briefcase" aria-hidden="true"></i>
            <span>Log out</span>
            
          </a>
         
        </li>
		
		
      
      </ul>
	  
    </section>
    <!-- /.sidebar -->
  </aside>
