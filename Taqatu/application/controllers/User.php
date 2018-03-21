<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
	function __construct() {
        parent::__construct();
       if($this->session->userdata("user_id")=="")
	{

       redirect();


	}
	  
    }
	public function dashboard()
	{
		 
	    $this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/dashboard");
	    $this->load->view("users_include/footer");
		
	}
}
?>