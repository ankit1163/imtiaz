
<style>
.left-collaps {
  border: 1px solid #fff;
  border-radius: 10px;
  padding: 25px;
  min-height: 550px;
}
.left-collaps h3 {
  color: rgb(255, 255, 255);
  font-size: 22px;
  margin-bottom: 20px;
}
.left-collaps .card-header {
  border:1px solid #fff;
  margin-bottom: 0;
  padding: 8px 10px;
  background: transparent;
    border-radius: 12px;
}
.left-collaps .card {
  background-clip: border-box;
  background-color: rgba(0, 0, 0, 0);
  border: 0px solid rgba(0, 0, 0, 0.125);
  border-radius: 0;
  display: flex;
  flex-direction: column;
  min-width: 0;
  position: relative;
  word-wrap: break-word;
}
.left-collaps .card h5 {
  font-size: 15px;
  font-weight: 400;
}
.left-collaps .card h5 a {
  color: rgb(255, 255, 255);
  display: inline-block;
  width: 100%;
}
.left-collaps .card h5 a:hover{
	text-decoration: none;
} 
.left-collaps .collapse, .left-collaps .collapsing {
 border-color: rgb(255, 255, 255);
    border-style: solid;
    border-width: 0 1px 1px;
    margin-top: -10px;
    padding: 25px 15px 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
}
.left-collaps .card-block {
  color: rgb(255, 255, 255);
  font-size: 13px;
}
.left-collaps a[aria-expanded="true"] i 
{ position:absolute;
  right: 20px;
  top:12px;
    -webkit-transition:all 300ms ease-in 0s;
    -moz-transition: all 300ms ease-in 0s;
    -o-transition: all 300ms ease-in 0s;
  transition: all 300ms ease-in 0s;
}
.left-collaps a[aria-expanded="false"] i   {
    color: #fff;
    position:absolute;
  right: 20px;
  top:12px;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
.left-second{
	margin-top:10px;
	min-height: 150px;
	width:100%;
	background: #96979B;
	border-radius: 10px;
}
.right-sidebar {
  background: #96979b none repeat scroll 0 0;
  border-radius: 10px;
  min-height: 720px;
  padding: 25px;
  width: 100%;
}
.data-radio label {
  display: inline-block;
  float: left;
}
.data-radio input {
  float: right;
}
.data-radio {
  float: left;
  width: 100%;
}
.radio-item {
  display: inline-block;
  position: relative;
  padding: 0 6px;
  margin: 10px 0 0;
  width:100%;
  border-bottom: 1px solid #fff;
      padding-bottom: 11px;
}

.radio-item input[type='radio'] {
  display: none;
}

.radio-item label {
  color: #666;
  font-weight: normal;
  float:right;
  margin-bottom:0;
  width:100%;
  
}
.radio-item label span{
	width:100%;
	color: #fff;
}
.radio-item p{
float:left;
color:#fff;
font-size:14px;
font-weight:400;
margin-bottom:0;
}
.radio-item label input+span:before {
content: " ";
    display: inline-block;
    position: absolute;
    top: 5px;
    margin: 0 0px 0 0;
    width: 20px;
    height: 20px;
    border-radius: 11px;
    background-color: #fff;
    right: 0;
}
.radio-item label input:checked+span:before{
	background-color: #fae142;
}
.radio-item input[type="radio"]:checked + label:after {
  background: #fae142 none repeat scroll 0 0;
  border-radius: 11px;
  content: " ";
  display: block;
  height: 20px;
  position: absolute;
  right: 6px;
  top: 5px;
  width: 20px;
}
.incr-btn{
	align-items: center;
    justify-content: space-around;
}
.btn-input{
	width:43px;
	
}
.row.text {
    font-size: 9px;
    color: white;
    padding: 15px 0 0 13px;
}
.wrap .col-lg-3 {
    padding-left: 0;
}
</style>
<div class="wrap">
<div class="container">
	<div class="row">
		<div class="col-lg-9">
	
			<div class="left-collaps">
				<h3>Activities</h3>
                <div id="accordion" role="tablist" aria-multiselectable="true">
				<?php if(!empty($result)){ 
				foreach($result as $re){
				?>
				  <div class="card">
				    <div class="card-header" role="tab" id="headingOne">
				      <h5 class="mb-0">
				        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				         <?php echo $re['floor'];?> Floor<i class="fa fa-angle-down"></i>
				        </a>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="card-block">
				        Lorem Insum Dummy Tet Here
				      </div>
				    </div>
				  </div>
				<?php } }?>
				 
				</div>
			</div>
			<div class="left-second"></div>
		</div>
		<div class="col-lg-3">
			<div class="right-sidebar">
			<div class="radio-item">
				<label>
					<input type="radio" name="ritem" value="ropt1" class="pull-right" id="chkYes" >
					<span>Add Floor</span>
				</label>
			</div>
			
			<div class="radio-item">
				<label>
					<input type="radio" name="ritem" value="ropt2" id="chkNo" >
					<span>Add Activity</span>
				</label>
			</div>
			<div class="add_flr" id="dvPassport" style="display: none">
			
			 <form role="form" method="post" action="<?= base_url('home/add_test')?> ">
			<div class="row incr-btn">
				<div class="form">
					<span class="text-white">Floor</span>
				</div>
				<div class="incr-decr-row">
					<button class="btn btn-sm btn-secondary" id="increment-btn" type="button">+</button>
					<input class="btn-input" type="number" min="0" value="0" id="count-result" name="floor">
					<button  class="btn btn-sm btn-secondary" id="decrement-btn" type="button">-</button>
					 <input type="hidden" id="test" value="<?php echo $project_id; ?>" name="pro_id" />
				</div>
			</div>
			<div class="row text">
				<p> * Default Activities will be added Automatically</p>
			</div>
			<div class="add button">
			 <button class="btn btn-block btn-light btn-sm" type="submit"> Add</button>
			</div>
			</form>
			</div>
		</div>
    </div>
    </div>
 <script>
            jQuery(document).ready(function ($) {
				 jQuery('#increment-btn').click(function(){
var fld = parseFloat($('#count-result').val());

$('#count-result').val(fld+1);

});
jQuery('#decrement-btn').click(function(){
var fld = parseFloat($('#count-result').val());
if(fld > 0){
$('#count-result').val(fld-1);
}
});

				 $('.nav-menus li a:not([href^="http"])').click(function (e) {
					e.preventDefault();
					e.stopImmediatePropagation();
					$(this).next('ul').show();
				});
                $('.toggle-btn').click(function () {
                    $(this).toggleClass('active');
                    $('#nav_bar').toggleClass('active');
                    $('.wrap').toggleClass('collapser');
                });
                $('.serch-section i').click(function () {
                    $('.search-card').addClass('active');
                });
                $('.card-close').click(function () {
                    $('.search-card').removeClass('active');
                });
                $('[data-section]').click(function (e) {
                    e.preventDefault();
                    var section = $(this).data('section');

                    $('.login-content,.post-content,.register-content').removeClass('active');
                    $(section).addClass('active');
                });
			
            });
			
        </script>
		<script>
            $(document).ready(function () {
                $('.dropdown-submenu a.test').on("click", function (e) {
                    $(this).next('ul').toggle();
                    e.stopPropagation();
                    e.preventDefault();
                });
            });
        </script>
		<script type="text/javascript">
    $(function () {
        $("input[name='ritem']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>