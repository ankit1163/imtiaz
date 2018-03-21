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