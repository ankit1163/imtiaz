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
<ul id="myid">
<?php 
if(isset($result) && $result != "") 
{
foreach($result as $res)
{
?>
<li id="<?php echo $res->user_name;?>" onclick="get_name(this.id,'<?php echo $res->u_id; ?>');"><?php echo $res->user_name;?></li>

<?php }} else{ ?>
<li id="">No Result Found!!!!</li>
<?php } ?>
</ul>