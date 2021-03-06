<!DOCTYPE html>
<html>
    <head>
        <title>Taqatu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);
            *{
                box-sizing: border-box;
            }
            body{
                margin: 0;
                background: #e4e4e4;
                font-size: 16px;
                font-family: 'Open Sans',sans-serif;
                background: cadetblue;
            }
            .container {
                max-width: 400px;
                margin: 0 auto;
                margin-top: 80px;
                width: 100%;
            }
            .form-control{
                background: #fff;
            }
            form {
                width: 320px;
                margin: 20px;
            }
            form > div {
                position: relative;
                overflow: hidden;
            }
            form input, form textarea ,form select{
                width: 100%;
                border: 1px solid #556061;
                background: none;
                position: relative;
                top: 0;
                left: 0;
                z-index: 0;
                padding: 8px 12px;
                outline: 0;
            }
            form input:valid, form textarea:valid {
                background: white;
            }
            form input:focus, form textarea:focus {
                border-color: #357EBD;
            }
            form input:focus + label, form textarea:focus + label {
                background: #357EBD;
                color: white;
                font-size: 70%;
                padding: 1px 6px;
                z-index: 2;
                text-transform: uppercase;
            }
            form label {
                -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
                transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
                position: absolute;
                color: #999;
                padding: 7px 6px;
                font-weight: normal;
            }
            form textarea {
                display: block;
                resize: vertical;
            }
            form.go-right label {
                border-radius: 0 5px 5px 0;
                height: 100%;
                top: 0;
                right: 100%;
                width: 100%;
                margin-right: -100%;
            }
            form.go-right input:focus + label, form.go-right textarea:focus + label {
                right: 0;
                margin-right: 0;
                width: 40%;
                padding-top: 5px;
            }
            .form-group {
                margin-bottom: 10px;
            }
            input[type="submit"] {
                background: #e61c1c !important;
                color: #fff;
            }
            .form-group h1{
                font-size: 18px;
                text-align: center;
                color:#fff;
            }
			.alert.alert-danger {
    background: #dab64b;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 20px;
    color: #fff;
}
.alert.alert-danger a{
        color: #907011;
    text-decoration: none;
    font-weight: bold;
}
        </style>
</head>
    <body>
        

       

          <center><h3 style="color:green"><?php echo $this->session->flashdata('register_message');?></h3></center>
        <div class="container">
            <div class="row">
                <form role="form" method="post" action="<?php echo base_url();?>home" enctype="multipart/form-data" class="col-md-9 go-right">
                    <div class="form-group">
                        <h1>Register Your Account</h1>
                    </div>
					<div class="alert alert-danger">
						You are already register 
						<a href="<?php base_url();?>login">Click to login</a>
					</div>
				 <div class="form-group">
                        <select id="user_type" name="user_profile"   class="form-control"/>
                            <option value="">--Select User profile--</option>
                            
                            <option value="OWNER">OWNER</option>
                            <option value="BUILDER">BUILDER</option>
                            <option value="ITEM PROVIDER">ITEM PROVIDER</option>
                            <option value="ITEM PROVIDER">ITEM PROVIDER</option>
                            <option value="MANAGER">MANAGER</option>
                            <option value="">OTHER</option>

                        </select>
                    </div>
					
                    <div class="form-group">
                        <input id="name" name="name" type="text" placeholder="Enter Name" required class="form-control"/>
                        
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" type="email" placeholder="Entere email" required class="form-control"/>
                        
                    </div>
                    <div class="form-group">
                        <input id="phone" name="phone" type="tel" placeholder="Enter mob" required class="form-control"/>
                       
                    </div>
                    <div class="form-group">
                        <input id="password" name="password" placeholder="Enter password" required type="password" class="form-control"/>
                       
                    </div>
                    <div class="form-group">
                        <input id="file" name="file" type="file" class="form-control"/>
                    </div>
                    
              
                   
                    <div class="form-group">
                        <input type="submit" id="submit" value="submit" name="register_submit"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
