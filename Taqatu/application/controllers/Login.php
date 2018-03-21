<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	
	function __construct() {
        parent::__construct();

	  
    }
	public function index()
	{
		if($this->input->post("login"))
		{
			$data=$_POST;
			
			
			$this->load->model("m_login");
			$result=$this->m_login->login($data);
			// print_r($result);
			// die;
		    if($result)
		    {
			$user_type=$result['user_profile'];
			$data_session_set = array('user_id' =>$result['u_id'],'user_profile'=>$result['user_profile'],'user_name'=>$result['user_name']); 
			
	        $this->session->set_userdata($data_session_set); 
	      
			redirect("");
	
			
		  }
		  else
		  {
			  
			  
		   $this->session->set_flashdata('login_error', 'invalid email & password'); 
           redirect("login");	
			  
		  }
			
		}
		
		$this->load->view("home/login");
		
		
	}
	public function logout()
	{
		
		$this->session->sess_destroy();
        redirect('');
		
	}
}
?>