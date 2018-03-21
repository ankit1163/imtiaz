<?php 
 class m_items extends CI_model
 {
	 public function add_item($data,$user_id)
	 {
		 
		 $insert_data=array(
		 "user_role"=>$data["user_role"],
		 "user_id"=>$user_id,
		 "item_Name"=>$data["item_Name"],
		 "item_status"=>$data["item_status"],
		 "item_type"=>$data["item_type"],
		 //"project_type"=>$data["project_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"]
		 );
		 
		 $result=$this->db->insert("ci_item",$insert_data);
		 return $result;
	 }
	 public function all_items()
	 {
		 $user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("user_id",$user_id);
		 $this->db->from("ci_item");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 }
	 public function get_item_by_id($item_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("item_id",$item_id);
		 $this->db->from("ci_item");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	 
	 public function update_item_status($status,$item_id)
	 {
		 
		 
		 $update_data=array(
		"i_status"=>$status
		);
		$this->db->where("item_id",$item_id);
		$result=$this->db->update("ci_item",$update_data);
		return $result;
		 
		 
	 }
	 public function delete_item($item_id)
	 {
		 
		 $this->db->where("item_id",$item_id);
		 $result=$this->db->delete("ci_item");
		 return $result;
		 
	 }
	 public function edit_item($data,$item_id)
	 
	 {
		 $insert_data=array(
		 "user_role"=>$data["user_role"],		 
		 "item_Name"=>$data["item_Name"],
		 "item_status"=>$data["item_status"],
		 "item_type"=>$data["item_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"]
		 );
		 $this->db->where("item_id",$item_id);
		 $result=$this->db->update("ci_item",$insert_data);
		 return $result;
		 
	 }
	 public function get_all_item()
	 {
		 
		 
		 $this->db->select("*");
		 $this->db->from("ci_item");
		 $result=$this->db->get();
		 print_r($result->result_array());
		 die;
	 }
	 public function admin_add_itemtype($data)
	 {
		 
		 $insert_data=array(
		 "item_title"=>$data["item_title"]
		 );
		 $result=$this->db->insert("ci_item_type",$insert_data);
		 return $result;
		 
	 }
	 
	 public function admin_all_items()
	 {
		 $this->db->select("*");
		 $this->db->from("ci_item_type");
		 $result=$this->db->get();
		 return $result->result_array();
	 }
	 
	 public function admin_deleteitem($item_id)
	 {
		 $this->db->where("item_id",$item_id);
		 $result=$this->db->delete("ci_item_type");
		// print_r($result);
			return $result;
	 
	 }
	  public function get_adminitem_by_id($item_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("item_id",$item_id);
		 $this->db->from("ci_item_type");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	  public function admin_edititem($data,$item_id)
	 {
		 // print_r($data);
		 // die();
		 $insert_data=array(
		 "item_title"=>$data["item_title"]			
		
		 );
		 $this->db->where("item_id",$item_id);
		 $result=$this->db->update("ci_item_type",$insert_data);
		 return $result;
		 
	 }
	 
 }
 ?>