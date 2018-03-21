<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	
	function __construct() {
        parent::__construct();
     
    }
	
	public function index()
	{
		if($this->input->post("login_submit"))
		{
			
			$data=$_POST;
			$this->load->model("m_admin");
			$result=$this->m_admin->login($data);
			
			
			
			  if($result)
		     {
			  $user_type=$result['user_role'];
		
			 
			  
		    $data_session_set = array('user_id' =>$result['u_id'],'user_role'=>$user_type); 
	        $this->session->set_userdata($data_session_set); 
			 redirect("admin/dashboard");
			 }
			  
		
		  else
		  {
			  
			  
		   $this->session->set_flashdata('login_error', 'invalid email & password'); 
           redirect("admin");	
			  
		  }
		 
			
			
			
		}
		$this->load->view("admin/login");
		
	}
	public function dashboard()
	{
		$this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/dashboard");
		$this->load->view("admin_include/footer");
	}
	public function logout()
	{
		
		$this->session->sess_destroy();
        redirect('admin');
		
	}
	public function add_home_photo()
	{
		if($this->input->post("add_home_photo"))
		{
			$home_photo=$_FILES["file"]["name"];
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
			$data = getimagesize($file_loc);
			$width = $data[0];
			$height = $data[1];
			
			if( $height == 956 && $width== 1440 )
			{
			  $file_type = $_FILES['file']['type'];
            $folder="home_photo/";
            move_uploaded_file($file_loc,$folder.$home_photo);
			$this->load->model("m_admin");
			
		    $result=$this->m_admin->add_home_photo($home_photo);
			if($result==1)
			{
				
		    $this->session->set_flashdata('home_photo', 'Home page photo has been added');
			redirect("admin/add_home_photo");
			// $this->session->flashdata('message_name');
			}
			}
			else {
				  $this->session->set_flashdata('home_photo', 'Please make sure your photo height and width is right');
			}
         	
		}
		$this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/add_home_photo");
		$this->load->view("admin_include/footer");
		
		
	}
	public function all_home_photo()
	{
		
	      $this->load->model("m_admin");
		 $home_image=$this->m_admin->get_all_home_photo();	
         $data['home_image']=$home_image;	 
		$this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/all_home_photo",$data);
		$this->load->view("admin_include/footer");
		
	}
	public function update_home_photo_status($status,$h_id)
	{
		
		$this->load->model("m_admin");
		$result=$this->m_admin->update_home_photo_status($status,$h_id);
		if($result==1)
		{
			
			  $this->session->set_flashdata('home_photo_status', 'Home page photo has been'." ".$status);

             redirect("admin/all_home_photo");
			
		}
		
	}
	public function delete_home_photo($h_id)
	{
		
		$this->load->model("m_admin");
		$result=$this->m_admin->delete_home_photo($h_id);
		if($result==1)
		{
			 $this->session->set_flashdata('delete_photo_status', 'Home page photo has been deleted');

             redirect("admin/all_home_photo");
			
		}
		
	}
}
?>