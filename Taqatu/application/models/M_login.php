<?php
ob_start(); 
class m_login extends CI_model
{
	
	  public function login($data)
	  {
		  
		  $email=$data['email'];
		  $password=md5($data["password"]);
		  $this->db->select("*");
		  $this->db->where("email",$email);
		  $this->db->where("password",$password);
		  $this->db->from("ci_users_register");
		  $result=$this->db->get();
		  return $result->row_array();
		  
		  
	  }
 
}?>