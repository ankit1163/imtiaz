<?php
ob_start(); 
class m_home extends CI_model
 {
	
      public function add_user_register($inser_data)
	  {
		  // print_r($inser_data);
		  // die;
		 $result=$this->db->insert("ci_users_register",$inser_data);
		 return $result;
		  
	  }

	
}?> 
	 