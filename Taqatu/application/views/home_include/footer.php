
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--script src="https://code.jquery.com/jquery-1.12.4.js"></script-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		
		   var keyword=$(this).val();
		  
		   var datastring="keyword=" +keyword;
		$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>projects/search_keyword",
		data:datastring,
	    success: function(data){
			//alert(data);
			
			$("#suggesstion-box").html(data);
		
		}
		});
	});
	
	
	});
	


</script>



<script>
    jQuery(document).ready(function ($) {
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

            $('.login-content,.post-content,.register-content,.type-content,.location-content,.duration-content,.budget-content,.area-content,.floor-content,.participate-content').removeClass('active');
            $(section).addClass('active');
        });

        $('.nav-menus li a:not([href^="http"])').click(function (e) {
            e.preventDefault();
            $(this).next('ul').toggle();
        });
    });
	function Delete_click(id)
{
	
	//alert(id);
	$("#search-box").val(name);
	$("#user_id").val(id);
	$("#suggesstion-box").hide();
	
}
</script>


</body>





<script>
function get_name(name,id)
{
	
	//alert(id);
	$("#search-box").val(name);
	$("#user_id").val(id);
	$("#suggesstion-box").hide();
	
}

</script>

</html>