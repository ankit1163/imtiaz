<style>
#suggesstion-box ul {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 5px 10px;
    background: #fff;
    border-radius: 5px;
    margin-top: 2px;
    box-shadow: 0 2px 4px #8c8c8c;
}
#suggesstion-box {
    position: relative;
}
</style>
<div class="outer-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="outer-section">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $i = 0;
                    foreach ($home_page_content as $home_image) {
                        $i++;
                        if ($i == 1) {
                            ?>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>home_photo/<?php echo $home_image["home_image"]; ?>" alt="First slide">
                            </div>

    <?php } else { ?>

                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo base_url(); ?>home_photo/<?php echo $home_image["home_image"]; ?>" alt="Second slide">
                            </div>
    <?php }
} ?>

                </div>
            </div>
        </div>
    </div> 
</div>

<div class="post-content">
 <div class="row">
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3">
            <div class="card">
                <img src="<?php echo base_url(); ?>img/demo.jpg" alt="" class="card-img-top"/>
                <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="login-content">
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
            <form method="post" action="<?php echo base_url(); ?>login">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <small class="form-text text-muted text-right">
                        <a href="<?php echo base_url(); ?>home/forget_password">Forget your password?</a>
                    </small>
                </div>
              
                <input type="submit" name="login" class="btn btn-primary pull-right" value="LOG IN">
            </form>
            <div class="clearfix"></div>
          
        </div>
    </div>
</div>
<div class="register-content">
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
            <form method="post" action="<?php echo base_url(); ?>home/user_register">
                <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">

                </div>

                <input type="submit" name="register" class="btn btn-primary pull-right" value="Sign up">
            </form>
            <div class="clearfix"></div> 
        </div>
    </div>

</div>
<div class="type-content">
	  <div id="signup_message"></div>
    <div class="row justify-content-md-center mg-top">
	  
        <div class="col-xs-12 col-sm-6">
           <form role="form" method="post" action="javascript:update_type();" id="type_cnt">
   	<div class="form-group">
	<input type="hidden" id="p_id" value="" name="p_id"/>
	<label for="exampleInputPassword1">Project Type</label>
                  <select  class="form-control" name="project_type" id="project_type"  >
				  <option>--Select Projects Type--</option>
				  <option value="HOUSE">HOUSE</option>
				  <option value="APARTMENT">APARTMENT</option>
				  <option value="RESTURENT">RESTURENT</option>
				  <option value="HOSPITAL">HOSPITAL</option>
				  <option value="OTHER">OTHER</option>
				
				
				  </select>
                </div>
				
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>
            <div class="clearfix"></div>
         
        </div>
    </div>
</div>
<div class="location-content">
	 <div id="location_message"></div>
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
           <form role="form" method="post" action="javascript:update_location();" id="location_cnt">
   	 <div class="form-group">
	 	<input type="hidden" id="p_id1" value="" name="p_id"/>
                  <label for="exampleInputPassword1">*Location</label>
                  <input type="text" name="location" class="form-control" id="location" placeholder="*project location" >
                </div>
				
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>
            <div class="clearfix"></div>
         
        </div>
    </div>
</div>
<div class="budget-content">
	 <div id="budget_message"></div>
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
            <form role="form" method="post" action="javascript:update_budget();" id="budget_cnt">
   	 <div class="form-group">
	 	<input type="hidden" id="p_id11" value="" name="p_id"/>
                  <label for="exampleInputPassword1">*Budget</label>
                  <input type="text" name="budget" class="form-control" id="budget" placeholder="*project budget" >
                </div>
				
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>
            <div class="clearfix"></div>
         
        </div>
    </div>
</div>
<div class="area-content">
	 <div id="area_message"></div>
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
           <form role="form" method="post" action="javascript:update_area();" id="area_cnt">
   	 <div class="form-group">
	 	<input type="hidden" id="p_id12" value="" name="p_id"/>
                  <label for="exampleInputPassword1">*Area</label>
                  <input type="text" name="total_area" class="form-control" placeholder="*project area" id="area" >
                </div>
				
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>
            <div class="clearfix"></div>
         
        </div>
    </div>
</div>
<div class="floor-content">
	 <div id="floor_message"></div>
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
           <form role="form" method="post" action="javascript:update_floor();" id="floor_cnt">
   	 <div class="form-group">
	 	<input type="hidden" id="p_id3" value="" name="p_id"/>
                  <label for="exampleInputPassword1">Floor</label>
                  <input type="text" name="floor" class="form-control" placeholder="*project floor" id="floor" >
                </div>
				
				    <input  type="submit" name="Submit" value="Submit" class="btn btn-primary">
				</form>
            <div class="clearfix"></div>
         
        </div>
    </div>
</div>
<div class="participate-content">
	 <div id="participate"></div>
    <div class="row justify-content-md-center mg-top">
        <div class="col-xs-12 col-sm-6">
           <form role="form" method="post" action="javascript:update_participate();" id="participate_cnt">
		    	<div class="form-group">
	<input type="hidden" id="p_id4" value="" name="p_id"/>
	<label for="exampleInputPassword1">User Role</label>
                  <select  class="form-control" name="role" id="role"  >
				  <option value="no role">--Select Projects Type--</option>
				  <option value="MANAGER">MANAGER</option>
				  <option value="BUILDER">BUILDER</option>
				 
				  </select>
                </div>
   	 <div class="form-group">
	 
                  <label for="exampleInputPassword1">Participate</label>
					
				
					<div class="row">
					<div class="col-lg-10 col-lg-offset-1">
					<div class="input-group">
					<span class="input-group-addon" >USER SEARCH</span>
					<input  id="search-box"  type="text" class="form-control input-lg" placeholder="Search name " >
					<input  id="user_id"  type="hidden" class="form-control" name ="user_id" value="" >
					</div>
					<div id="suggesstion-box"></div>
					</div>
					</div>   
					<div class="space"></div>
				
                </div>
				<div id="txtHint" style="padding-top:50px; text-align:center;" ></div>
				<input  type="submit" name="Add" value="Add" class="btn btn-primary">
				</form>
            <div class="">
			
			</div>
			
			<div id="txtHint" style="padding-top:50px; text-align:center;" ></div>
         	<div id="participate-box">
			<ul id="">
<?php 
// print_r($result12);
//die;
if(isset($result12) && $result12 != "") 
{
foreach($result12 as $res)
{
?>
<li id="<?php echo $res['user_name'];?>" ></li>

<?php }} ?>
</ul>
			
			</div>
        </div>
    </div>

    <!-- Login Section end here  -->
</div>

<script type="text/javascript">

function update_type()
{
	var form_data = new FormData($("#type_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/update_project", 
		type: "post", 
		data: form_data,     
		cache: false,
		processData: false,
		contentType: false,
		success: function (htmlStr)
		{
			//alert(htmlStr);
			
			if(htmlStr == 'false')
			{
			  $('#signup_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#signup_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				window.setTimeout(function() {
				window.location.href='<?php echo base_url(); ?>';
				}, 5000);

			}
		
		}
	});		
}

function update_location()
{
	var form_data = new FormData($("#location_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/update_project_location", 
		type: "post", 
		data: form_data,     
		cache: false,
		processData: false,
		contentType: false,
		success: function (htmlStr)
		{
			//alert(htmlStr);
			
			if(htmlStr == 'false')
			{
			  $('#location_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#location_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				window.setTimeout(function() {
				window.location.href='<?php echo base_url(); ?>';
				}, 5000);

			}
		
		}
	});		
}
function update_area()
{
	var form_data = new FormData($("#area_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/update_project_area", 
		type: "post", 
		data: form_data,     
		cache: false,
		processData: false,
		contentType: false,
		success: function (htmlStr)
		{
			//alert(htmlStr);
			
			if(htmlStr == 'false')
			{
			  $('#area_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#area_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				window.setTimeout(function() {
				window.location.href='<?php echo base_url(); ?>';
				}, 5000);

			}
		
		}
	});		
}

function update_floor()
{
	var form_data = new FormData($("#floor_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/update_project_floor", 
		type: "post", 
		data: form_data,     
		cache: false,
		processData: false,
		contentType: false,
		success: function (htmlStr)
		{
			//alert(htmlStr);
			
			if(htmlStr == 'false') 
			{
			  $('#floor_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#floor_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				window.setTimeout(function() {
				window.location.href='<?php echo base_url(); ?>';
				}, 5000);

			}
		
		}
	});		
}
function update_participate()
{
	var form_data = new FormData($("#participate_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/update_participate", 
		type: "post", 
		data: form_data,     
		cache: false,
		processData: false,
		contentType: false,
		success: function (htmlStr)
		{
			//alert(htmlStr);
			
			if(htmlStr == 'false') 
			{
			  $('#floor_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#floor_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				window.setTimeout(function() {
				window.location.href='<?php echo base_url(); ?>';
				}, 5000);

			}
		
		}
	});		
}

   </script>
<script>
		function get_projectid(p_id,p_type)
		{
			
			//alert(p_id);
			//alert(p_type);
			$("#p_id").val(p_id);
			//$("#project_type").val(p_type);
			$('#project_type  option[value="'+p_type+'"]').prop("selected", true);
			//document.getElementById("p_id").value = p_id;
			
		}
		function get_projectid1(p_id,location)
		{
			
		//	alert(p_id);
			$("#p_id1").val(p_id);
			$("#location").val(location);
			//document.getElementById("p_id").value = p_id;
			
		}
		function get_projectid2(p_id,budget)
		{
			
			//alert(p_id);
			$("#p_id11").val(p_id);
			$("#budget").val(budget);
			//document.getElementById("p_id").value = p_id;
			
		}
		function get_projectid3(p_id,area)
		{
			
			//alert(p_id);
			$("#p_id12").val(p_id);
			$("#area").val(area);
			//document.getElementById("p_id").value = p_id;
			
		}
		function get_projectid4(p_id,floor)
		{
			
			//alert(p_id);
			$("#p_id3").val(p_id);
			$("#floor").val(floor);
			//document.getElementById("p_id").value = p_id;
			
		}
		function get_projectid5(p_id)
		{
			
			//alert(p_id);
			$("#p_id4").val(p_id);
			
			//document.getElementById("p_id").value = p_id;
			
		}
	
		</script>


