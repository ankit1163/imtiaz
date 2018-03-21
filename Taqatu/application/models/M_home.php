<?php
ob_start(); 
class m_home extends CI_model
 {
	
     
	  public function get_contactus_data()
	  {
		  
		  $this->db->select("*");
		  $this->db->where("status","Active");
		  $this->db->from("ci_contactus_pages");
		  $result=$this->db->get();
		  return $result->row_array();
		  
	  }
	  public function get_about_content()
	  {
		  
		$this->db->select("*");
       $this->db->from("ci_aboutus_pages");
       $result=$this->db->get();	
      return $result->row_array();	   
		  
		  
	  }
	  public function email_exists(){
    $email = $this->input->post('email');
    $query = $this->db->query("SELECT email, password FROM ci_users WHERE email='$email'");    
    if($row = $query->row()){
        return TRUE;
    }else{
        return FALSE;
    }
 }
	  public function get_user_info($email)
	  {
		  
		$this->db->select("*");
		$this->db->where("email",$email);
       $this->db->from("ci_users_register");
       $result=$this->db->get();	
      return $result->row_array();	   
	  
	  } 
	 
	  public function add_user_register($data)
	  {
		$insert_data=array(
		"user_name"=>$data["user_name"],
		"email"=>$data["email"],
		"password"=>md5($data["password"])
		
		
		); 
        $result=$this->db->insert("ci_users_register",$insert_data);	
        return $result;  		
		  
		  
	  } 
	  public function update_password($data)
	  {
		$insertdata=array(
		"password"=>md5($data["password"])
		
		); 
		$this->db->where("u_id",$data['user_id']);
        $result=$this->db->update("ci_users_register",$insertdata);	
        return $result;  		
		 
	  }
	  public function get_home_page_content()
	  {
		$this->db->select("*");
		$this->db->where("status","Active");
        $this->db->from("ci_home_photo");
        $result=$this->db->get();		
		return $result->result_array();
		  
		  
	  }  
	  public function get_event_same_id($pro_id)
	  {
		$this->db->select("*");
		$this->db->where("pro_id",$pro_id);
        $this->db->from("calendar_events");
        $result=$this->db->get();		
		return $result->result_array();
		  
		  
	  } 
	  public function get_excluded_bu_id($pro_id)
	  {
		$this->db->select("*");
		$this->db->where("pro_id",$pro_id);
        $this->db->from("excluded_date");
        $result=$this->db->get();		
		return $result->result_array();
		  
		  
	  } 
	  public function get_event_show_id($pro_id)
	  {
		$this->db->select("*");
		$this->db->where("pro_id",$pro_id);
        $this->db->from("event_show");
        $result=$this->db->get();		
		return $result->row_array();
		  
		  
	  }
	  public function get_floors_same_id($pro_id)
	  {
		$this->db->select("*");
		$this->db->where("pro_id",$pro_id);
        $this->db->from("floor");
        $result=$this->db->get();		
		return $result->result_array();
		  
		  
	  }
	  public function add_event($data)
		{
			
			$this->db->insert("calendar_events", $data);
		}  
		public function add_floor($data)
		{
			
			$this->db->insert("floor", $data);
		}  
		public function add_event_show($data)
		{
			
			$this->db->insert("event_show", $data);
		} 
		public function add_event_show_day($data)
		{
			
			$res=$this->db->insert("event_show", $data);
			return $res;
		} 
		public function add_event_excluded($data)
		{
			$this->db->insert("excluded_date", $data);
		}
		 public function get_all_data($ID)
	  {
		  
		$this->db->select("*");
		$this->db->where("ID",$ID);
       $this->db->from("calendar_events");
       $result=$this->db->get();	
      return $result->row_array();	   
	  
	  }	
	  public function get_all_excluded_data($ID)
	  {
		  
		$this->db->select("*");
		$this->db->where("id",$ID);
       $this->db->from("excluded_date");
       $result=$this->db->get();	
      return $result->row_array();	   
	  
	  }	
	  public function get_all_data_show($pro_id)
	  {
		  
		$this->db->select("*");
		$this->db->where("pro_id",$pro_id);
       $this->db->from("event_show");
       $result=$this->db->get();	
      return $result->row_array();	   
	  
	  }
	public function get_events($pro_id)
	{
		//return $this->db->where("start >=", $start)->where("end <=", $end)->where("pro_id", $pro_id)->get("calendar_events");
		return $this->db->where("pro_id", $pro_id)->where("status", 1)->get("event_show")->row_array();
	}
	public function get_excluded($start, $end,$pro_id)
	{
		return $this->db->where("excluded_start >=", $start)->where("excluded_end <=", $end)->where("pro_id", $pro_id)->get("calendar_events");
	}
	 public function get_event($id) 
    {
        return $this->db->where("ID", $id)->get("calendar_events");
    }
	
	public function update_event($id, $data) 
    {
        $this->db->where("ID", $id)->update("calendar_events", $data);
    }
	public function add_day_cnts($id, $data) 
    {
        $this->db->where("pro_id", $id)->update("event_show", $data);
    }
	public function update_event_show($id,$data) 
    {
        $this->db->where("pro_id", $id)->update("event_show", $data);
    }
	public function update_event_show_day($id,$data) 
    {
       $res= $this->db->where("pro_id", $id)->update("event_show", $data);
	   return $res;
    }

    public function delete_event($id) 
    {
        $this->db->where("ID", $id)->delete("calendar_events");
    }
	public function delete_event_excluded($id) 
    {
        $this->db->where("id", $id)->delete("excluded_date");
    }
}?> 
	 