<?php 
 class m_articles extends CI_model
 {
	 public function add_article($data,$user_id)
	 {
		 //echo 'here';
		 
		 $insert_data=array(
		 "user_role"=>$data["user_role"],
		 "user_id"=>$user_id,
		 "article_Name"=>$data["article_Name"],
		 "article_status"=>$data["article_status"],
		 "article_type"=>$data["article_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"]
		 );
		 
		 $result=$this->db->insert("ci_articles",$insert_data);
		 return $result;
	 }
	 public function all_articles()
	 {
		 $user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("user_id",$user_id);
		 $this->db->from("ci_articles");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 }
	 public function get_article_by_id($a_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("a_id",$a_id);
		 $this->db->from("ci_articles");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	 public function update_article_status($status,$a_id)
	 {
		 
		 
		 $update_data=array(
		"a_status"=>$status
		);
		$this->db->where("a_id",$a_id);
		$result=$this->db->update("ci_articles",$update_data);
		return $result;
		 
		 
	 }
	 public function delete_article($a_id)
	 {
		 
		 $this->db->where("a_id",$a_id);
		 $result=$this->db->delete("ci_articles");
		 return $result;
		 
	 }
	 public function edit_article($data,$a_id)
	 
	 {
		 $insert_data=array(
		 "user_role"=>$data["user_role"],		 
		 "article_Name"=>$data["article_Name"],
		 "article_status"=>$data["article_status"],
		 "article_type"=>$data["article_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"]
		 );
		 $this->db->where("a_id",$a_id);
		 $result=$this->db->update("ci_articles",$insert_data);
		 return $result;
		 
	 }
	  public function get_all_articles()
	 {
		 
		 
		 $this->db->select("*");
		 $this->db->from("ci_articles");
		 $result=$this->db->get();
		 print_r($result->result_array());
		 die;
	 }
 }
 ?>