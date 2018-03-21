
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Taqatu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style.css">
    </head>
    <body>

        <div id="nav_bar" class="sidenav">

            <?php
            if ($this->session->userdata("user_id")) {

                $user_id = $this->session->userdata("user_id");
                $user_detail = get_user_details($user_id);
                ?> 
                <a  class="sm-menu"><?php echo $user_detail["user_name"]; ?></a>



            <?php } else { ?>


                <a href="#" class="sm-menu"  data-section=".login-content">Sign In</a>


            <?php } ?>

            <!--a href="#"   data-toggle="dropdown">projects</a>
                        
                     <div class="drop down" Style= "border: 0px;">
             
                
                  <ul class="dropdown-menu">
                    
                                        <li><a href="#">project x1</a></li>
                                         
                    <li><a href="#">project x2</a></li>
                   
                  </ul>
             </div-->


                <div class="row">
                    <div class="dropdown">
                        <?php
                        $user_id = $this->session->userdata("user_id");
                        $data = get_user_project($user_id);
                        ?>
                        <ul class="nav-menus">
                            <li>
                                <a href="<?php echo base_url(); ?>" class="divider">Home</a>
                            </li>
							   <?php
            if ($this->session->userdata("user_id")) {

                $user_id = $this->session->userdata("user_id");
                $user_detail = get_user_details($user_id);
                ?>
              <li>
                                <a class="">Projects <span class="caret"></span></a>
                                <ul class="dropdown-menu1">
                                    <?php foreach ($data as $pro) { ?>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href=""><?php echo $pro['project_Name']; ?> </a> 	
                                            <ul class="">
											
                                        <li><a tabindex="-1" onclick ="get_projectid('<?php echo $pro["p_id"]; ?>','<?php echo $pro["project_type"]; ?>');" class="sm-menu"  data-section=".type-content" >Type</a></li>
                                        <li><a tabindex="-1"  onclick ="get_projectid1('<?php echo $pro["p_id"];?>','<?php echo $pro["location"]; ?>');" class="sm-menu"  data-section=".location-content">Location</a></li>
                                        <li><a tabindex="-1" href="<?php echo base_url(); ?>home/duration/<?php echo $pro["p_id"];?>">Duration</a></li>
                                        <li><a tabindex="-1" href="<?php echo base_url(); ?>home/budget/<?php echo $pro["p_id"];?>" >Budget</a></li>
                                        <li><a tabindex="-1"  onclick ="get_projectid3('<?php echo $pro["p_id"];?>','<?php echo $pro["total_area"];?>');" class="sm-menu"  data-section=".area-content">area</a></li>
                                         <li><a tabindex="-1" href="<?php echo base_url(); ?>home/floors/<?php echo $pro["p_id"];?>">floor</a></li>
     <li><a tabindex="-1"  href ="<?php echo base_url();?>projects/participate-project/<?php echo $pro["p_id"];?>" class="sm-menu">Participate</a></li>
        <!--li><a tabindex="-1"  onclick ="get_projectid5('<?php echo $pro["p_id"];?>');" class="sm-menu"  data-section=".participate-content">Participate</a></li-->
                                            </ul>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
            <?php } else { ?>

            <?php } ?>
                            
                        </ul>

                    </div>
                </div>
         



           
            <a href="#" class="divider"></a>
            <?php if ($this->session->userdata("user_id")) { ?>
                <a href="<?php echo base_url(); ?>user/dashboard" class="sm-menu">Dashboard</a>
            <?php } ?>
            <a href="<?php echo base_url(); ?>home/aboutus" class="sm-menu">About</a>
            <a href="<?php echo base_url(); ?>home/contactus" class="sm-menu">Contact</a>
			<?php

  if ($this->session->userdata("user_id")=="") {


			?>
            <a href="#" class="sm-menu"  data-section=".register-content">Sign Up</a>
  <?php } ?>
            <?php if ($this->session->userdata("user_id")) { ?>
                <a href="<?php echo base_url(); ?>login/logout" class="sm-menu">Log out</a>
            <?php } ?>
        </div>
        <span class="toggle-btn"></span>
        <header>
            <div class="upper-section">
                <!--<div class="logo-section">
                    <img src="<?php // echo base_url();        ?>img/logo.png" alt="logo">
                </div>-->
                <div class="serch-section">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <div class="search-card">
                        <span class="card-close">✖</span>
                        <div class="inline">
                            <form class="form-inline">
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" placeholder="Search..">
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        </header>
		
