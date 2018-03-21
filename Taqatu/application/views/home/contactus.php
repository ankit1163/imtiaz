   <div class="outer-section banner-section">
            <img src="<?php echo base_url();?>pages_image/<?php echo @$contactus_data['uper_image'];?>" alt="" class="img-fluid"/>
        </div>
		<center><h3 style="color:green"><?php echo $this->session->flashdata('contactus');?></h3></center>
        <div class="container">
            <div class="row content-page" >
			
                <div class="col-xs-12 col-sm-5">
                    <address class="text-center contact-address">
                        <h4>Taqatu</h4>
                        <br>
                        Via Tinella, 2 - Gavirate (VA)<br>
                        Tel. 0039 0332 7486<br>
                        Fax 0039 0332 748655<br>
                        contact@rodaonline.com
                    </address>
                </div>

                <div class="col-xs-12 col-sm-7">
                    <form method="post" action="<?php echo base_url();?>home/contactus">
                        <!--<div class="form-group">
                            <label >User profile</label>
                            <select class="form-control" >
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>-->
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >Last name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >First name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >Address</label>
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >City</label>
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >Zip code</label>
                                    <input type="text" name="zip_code" class="form-control" placeholder="Zip code">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >State</label>
                                    <input type="text" name="state" class="form-control" placeholder="State">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label >Fax</label>
                                    <input type="text" name="fax" class="form-control" placeholder="Fax">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                
                        </div>
                        <div class="form-group">
                            <label >I am intersted in</label>
                            <textarea rows="5" class="form-control" name="notes" placeholder="I am intersted in"></textarea>
                        </div>
                       <!-- <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                I acknowledge that I have read and accept the privacy policy and consent to the processing of my
                                personal data.*
                            </label>
                        </div>-->
                        <!--<div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                I would like to receive your newsletter
                            </label>
                        </div>-->
                        <input  type="submit" name="contact" value="Send" class="btn btn-primary">
                    </form>
                </div>

            </div>

        </div>