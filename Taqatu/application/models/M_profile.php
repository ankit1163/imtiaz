    <?php 
   class m_profile extends CI_model
 {
    public function get_user_data($u_id) {
		
		 $this->db->select("*");
		 $this->db->where("u_id",$u_id);
		 $this->db->from("ci_users_register");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	  public function get_admin_userdata($u_id) {
		
		 $this->db->select("*");
		 $this->db->where("u_id",$u_id);
		 $this->db->from("ci_users");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	 
	 public function edit_profile($data,$p_id)
	 
	 {
		 $insert_data=array(
		 "user_profile"=>$data["user_profile"],		 
		 "name"=>$data["name"],
		 "email"=>$data["email"],
		 "phone"=>$data["phone"],
		 "password"=>$data["password"],
		 "user_image"=>$data["user_image"],
		 
		 );
		 $this->db->where("u_id",$u_id);
		 $result=$this->db->update("ci_users_register",$insert_data);
		 return $result;
		 
	 }
 } //class ends