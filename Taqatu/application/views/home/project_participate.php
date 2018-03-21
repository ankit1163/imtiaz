
<div class="wrap">
    <div class="container">
        <div class="row" >

            <center><h3 style="color:green"><?php echo $this->session->flashdata('already_participate'); ?></h3></center>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h6 style="color:green"><?php echo $this->session->flashdata('delete_participate'); ?></h6>
                        <form role="form" method="post" action="javascript:update_participate();" id="participate_cnt">
                            <div class="form-group">
                                <input type="hidden" id="p_id4" value="<?php echo $p_id; ?>" name="p_id"/>
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
                            <div id="txtHint" style="text-align:center;" ></div>
                            <input  type="submit" name="Add" value="Add" class="btn btn-primary">
                        </form>
                        <div id="txtHint" style="padding-top:50px; text-align:center;" ></div>
                        <div id="participate-box">
                            <ul id="">
                                <?php
// print_r($result12);
//die;
                                if (isset($result12) && $result12 != "") {
                                    foreach ($result12 as $res) {
                                        ?>
                                        <li id="<?php echo $res['user_name']; ?>" ><?php echo $res['user_name']; ?> <a href="<?php echo base_url(); ?>projects/participate_del/<?php echo $res['id']; ?>/<?php echo $res['pro_id']; ?>"><i class="fa fa-times" aria-hidden="true" style="color: red"></i></a></li>

                                    <?php
                                    }
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function update_participate()
    {
        var form_data = new FormData($("#participate_cnt")[0]);

        console.log(form_data);
        jQuery.ajax({
            url: "<?php echo base_url(); ?>projects/update_participate",
            type: "post",
            data: form_data,
            cache: false,
            processData: false,
            contentType: false,
            success: function (htmlStr)
            {
                //alert(htmlStr);

                if (htmlStr == 'false')
                {
                    $('#participate').html('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong>An error has been occured,Please fil the data again.</div>');


                } else
                {
                    $('#participate').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>  details has been successfully edited.</div>');
                    $("#participate-box").html(htmlStr);

                }

            }
        });
    }
</script>



