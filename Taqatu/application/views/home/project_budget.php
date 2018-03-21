
<div class="wrap">
    <div class="container">
        <div class="row" >

            <center><h3 style="color:green"><?php echo $this->session->flashdata('already_participate'); ?></h3></center>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h6 style="color:green"><?php echo $this->session->flashdata('delete_participate'); ?></h6>
                        <form role="form" method="post" action="javascript:update_budget();" id="budget_cnt">
   	 <div class="form-group">
	 	<input type="hidden" id="p_id11" value="<?php echo $project_id; ?>" name="p_id"/>
                  <label for="exampleInputPassword1">Proposed Budget</label>
                  <input type="text" name="budget" class="form-control" id="budget" placeholder="*project budget" >
                </div> 
				
				
				    <input  type="submit" name="Add" value="Add" class="btn btn-primary">
				</form>
                        <div id="txtHint" style="padding-top:50px; text-align:center;" ></div>
                        <div id="budget-box">
                            <ul id="">
<?php 
if(isset($result12) && $result12 != "") 
{
foreach($result12 as $res)
{
?>
<li id="" >$<?php echo $res['pro_price'];?> <a href="<?php echo base_url();?>projects/budget_del/<?php echo $res['id'] ;?>/<?php echo $res['pro_id'] ;?>"><i class="fa fa-times" aria-hidden="true" style="color: red"></i></a></li>
<?php }} else{ ?>
<li id="">No Result Found!!!!</li>
<?php } ?>
</ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function update_budget()
{
	var form_data = new FormData($("#budget_cnt")[0]);
	
	console.log(form_data);
	jQuery.ajax({
		url: "<?php echo base_url();?>projects/insert_project_budget", 
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
			  $('#budget_message').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');
			
				
			}
			else
			{
				$('#budget_message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
				   $("#budget-box").html(htmlStr);

			}
		
		}
	});		
}
</script>



