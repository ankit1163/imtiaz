<?php 
 class m_projects extends CI_model
 {
	 public function add_project($data,$user_id)
	 {
		 
		 $insert_data=array(
		// "user_role"=>$data["user_role"],
		 "user_id"=>$user_id,
		 "project_Name"=>$data["project_Name"],
		/*  "project_status"=>$data["project_status"],
		 "project_type"=>$data["project_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"] */
		 );
		 
		 $result=$this->db->insert("ci_projects",$insert_data);
		 return $result;
	 } 
	 public function insert_project_participate($data)
	 {
		 
	
		 $result=$this->db->insert("ci_participate",$data);
		 return $result;
	 }
	 public function insert_project_budget($data)
	 {
		 
	
		 $result=$this->db->insert("project_budget",$data);
		 return $result;
	 }
	 public function all_projects()
	 {
		 $user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("user_id",$user_id);
		 $this->db->from("ci_projects");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 } 
	 public function all_participate($id)
	 {
		
		 $this->db->select("*,participate.id as id");
		 $this->db->where("participate.pro_id",$id);
		 $this->db->join('ci_users_register as u', 'u.u_id = participate.add_users');
		 $this->db->join('ci_projects as p', 'p.p_id = participate.pro_id');
		 $this->db->from("ci_participate as participate");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 }
	 public function get_project_by_id($p_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("p_id",$p_id);
		 $this->db->from("ci_projects");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 } 
	 public function get_project_participate_exist($id)
	 {
		 $this->db->select("*");
		 $this->db->where("add_users",$id);
		 $this->db->from("ci_participate");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 } 
	 public function get_project_participate($p_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("pro_id",$p_id);
		 $this->db->join('ci_users_register as u', 'u.u_id = ci_participate.add_users');
		 $this->db->from("ci_participate");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 } 
	 public function get_project_budget($p_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("pro_id",$p_id);
		 //$this->db->join('ci_users_register as u', 'u.u_id = ci_participate.add_users');
		 $this->db->from("project_budget");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 } 
	 public function get_all_users()
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->from("ci_users_register");
		 $result=$this->db->get();
		 return $result->result_array();
		 
	 } 
	 public function get_participate_by_id($p_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*,participate.id as id");
		 $this->db->where("id",$p_id);
		  $this->db->join('ci_users_register as u', 'u.u_id = participate.add_users');
		 $this->db->from("ci_participate as participate");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	 public function update_project_status($status,$p_id)
	 {
		 
		 
		 $update_data=array(
		"p_status"=>$status
		);
		$this->db->where("p_id",$p_id);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
		 
		 
	 }
	 public function update_project($data)
	 {
		 
		 
		 $update_data=array(
		"project_type"=>$data['project_type']
		);
		$this->db->where("p_id",$data['p_id']);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
		 
		 
	 } 
	 public function update_project_location($data)
	 {
		 $update_data=array(
		"location"=>$data['location']
		);
		$this->db->where("p_id",$data['p_id']);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
	}
	public function update_project_area($data)
	 {
		 $update_data=array(
		"total_area"=>$data['total_area']
		);
		$this->db->where("p_id",$data['p_id']);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
	}
	public function update_project_budget($data)
	 {
		 $update_data=array(
		"budget"=>$data['budget']
		);
		$this->db->where("p_id",$data['p_id']);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
	}
	public function update_project_floor($data)
	 {
		 $update_data=array(
		"floor"=>$data['floor']
		);
		$this->db->where("p_id",$data['p_id']);
		$result=$this->db->update("ci_projects",$update_data);
		return $result;
	}
	 public function delete_project($p_id)
	 {
		 
		 $this->db->where("p_id",$p_id);
		 $result=$this->db->delete("ci_projects");
		 return $result;
		 
	 }  
	 public function delete_particiate_by_project($p_id)
	 {
		 
		 $this->db->where("pro_id",$p_id);
		 $result=$this->db->delete("ci_participate");
		 return $result;
		 
	 } 
	 public function delete_participate($p_id)
	 {
		 
		 $this->db->where("id",$p_id);
		 $result=$this->db->delete("ci_participate");
		 return $result;
		 
	 }
	 public function delete_budget($b_id)
	 {
		 
		 $this->db->where("id",$b_id);
		 $result=$this->db->delete("project_budget");
		 return $result;
		 
	 }
	 public function edit_project($data,$p_id)
	 
	 {
		 $insert_data=array(
		 "user_role"=>$data["user_role"],		 
		 "project_Name"=>$data["project_Name"],
		 "project_status"=>$data["project_status"],
		 "project_type"=>$data["project_type"],
		 "location"=>$data["location"],
		 "duration"=>$data["duration"],
		 "start_date"=>$data["start_date"],
		 "end_date"=>$data["end_date"],
		 "budget"=>$data["budget"],
		 "participants"=>$data["participants"],
		 "total_area"=>$data["total_area"],
		 "floor"=>$data["floor"]
		 );
		 $this->db->where("p_id",$p_id);
		 $result=$this->db->update("ci_projects",$insert_data);
		 return $result;
		 
	 }
	 public function edit_participate($data,$p_id)
	 
	 {
		 $insert_data=array(
		 "role"=>$data["role"],		 
		 "add_users"=>$data["add_users"]
		
		 );
		 $this->db->where("id",$p_id);
		 $result=$this->db->update("ci_participate",$insert_data);
		 return $result;
		 
	 }
	 public function get_all_projects()
	 {
		 
		 
		 $this->db->select("*");
		 $this->db->from("ci_projects");
		 $result=$this->db->get();
		 print_r($result->result_array());
		 die;
	 }
	 function booktable($search){

	 $user_name=$this->session->userdata("user_name");
        $query = $this ->db ->select('*')->from('ci_users_register') ->like('user_name',$search) ->get();
     
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
		
}
 }
 ?>