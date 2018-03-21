<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	
	function __construct() {
        parent::__construct();
       
	  
    }
	public function dashboard()
	{
	    $this->load->view("users/dashboard");
		
	}
}
?>