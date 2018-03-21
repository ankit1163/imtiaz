<?php
ob_start();
 class profile extends CI_Controller {
	   function __construct() {
        parent::__construct();
       if($this->session->userdata("user_id")=="")
	{

       redirect();


	}
	  
    }
	public function update_profile()
	{
		$u_id=$this->session->userdata("user_id");
		
		
		$this->load->model("m_profile");
		$result=$this->m_profile->get_user_data($u_id);	
		
    }
	public function admin_updateprofile()
	{
		$u_id=$this->session->userdata("user_id");
		$this->load->model("m_profile");
		$result=$this->m_profile->get_admin_userdata($u_id);
		//print_r($result);
		
		$data['result']=$result;
		$this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/profile",$data);
		$this->load->view("admin_include/footer");
	}
			
		
		

    
}?>