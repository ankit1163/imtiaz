<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	function __construct() {
        parent::__construct();
       
	  
    }
	public function index()
	{
		if($this->input->post("register_submit"))
		{
			$data=$_POST;
			
			$user_image=$_FILES["file"]["name"];
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="users_iamge/";
            move_uploaded_file($file_loc,$folder.$user_image);
			$inser_data=array(
			"name"=>$data['name'],
			"email"=>$data['email'],
			"phone"=>$data['phone'],
			"password"=>md5($data["password"]),
			"user_image"=>$user_image
			
			);
		
			
			$this->load->model("m_home");
			$result=$this->m_home->add_user_register($inser_data);
			if($result==1)
			{
				
				  $this->session->set_flashdata('register_message', 'Registration  completed successfully');

                   redirect("home");
			}
			
		}
		
		$this->load->view("home/register");
		
	}
}?>