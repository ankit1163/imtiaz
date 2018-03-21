<?php 
 class m_admin extends CI_model
 {
	 
	 
	 
	 public function login($data)
	 {
		 
		 // print_r($data);
		 // die;
		 $password=md5($data['password']);
		 $email=$data['email'];
		$this->db->select("*");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$this->db->from("ci_users");
        $result=$this->db->get();
		return $result->row_array();
		 
	 }
	public function add_home_photo($home_photo)
	{
        $insert_data=array("home_image"=>$home_photo);
		$result=$this->db->insert("ci_home_photo",$insert_data);
		return $result;
        

	}	
	public function get_all_home_photo()
	{
		$this->db->select("*");
		$this->db->from("ci_home_photo");
		$result=$this->db->get();
		return $result->result_array();
		
	}
	public function update_home_photo_status($status,$h_id) 
	{
		
		$update_data=array(
		"status"=>$status
		);
		$this->db->where("h_id",$h_id);
		$result=$this->db->update("ci_home_photo",$update_data);
		return $result;
		
	}
	public function delete_home_photo($h_id)
	{
		$this->db->where("h_id",$h_id);
		$result=$this->db->delete("ci_home_photo");
		return $result;
		
		
	}
}
?>