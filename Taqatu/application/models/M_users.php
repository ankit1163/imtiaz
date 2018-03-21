<?php
class m_users Extends CI_model
{
	
	public function get_user($user_id)
	{
		
		$this->db->select("*");
		$this->db->where("u_id",$user_id);
		$this->db->from("ci_users_register");
		$result=$this->db->get();
		return $result->row_array();
		
	}
	public function get_user_projects($user_id)
	{
		
		$this->db->select("*");
		$this->db->where("user_id",$user_id);
		$this->db->from("ci_projects");
		$result=$this->db->get();
		return $result->result_array();
		
	}
	
	
	
}



 ?>