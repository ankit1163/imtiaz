<?php 
class m_pages extends CI_Model
{
	  public function add_contactus_page($Contactus_image)
	  {
		  $insert_data=array(
		  "uper_image"=>$Contactus_image
		  
		  
		  );
		    $result=$this->db->insert("ci_contactus_pages",$insert_data);
			return $result;
			
	  }
	  public function all_contactus_pages()
	  {
		  
		  $this->db->select("*");
		  $this->db->from("ci_contactus_pages");
		  $result=$this->db->get();
		  return $result->result_array();
		  		  
		  
		  
	  }
	  public function update_contactus_status($status,$c_id)
	  {
		$update_data=array(
		"status"=>$status
		);  
		  $this->db->where("c_id",$c_id);
		  $result=$this->db->update("ci_contactus_pages",$update_data);
		  return $result;
		  
	  }
	  public function delete_contactus_status($c_id)
	  {
		  
		  $this->db->where("c_id",$c_id);
		 $result=$this->db->delete("ci_contactus_pages");
		 return $result;
		  
		  
	  }
	  
	  public function add_aboutus_page($Aboutus_image,$about_content)
	  {
		  $insert_data=array(
		  "uper_image"=>$Aboutus_image,
		  "content"=>$about_content		  		  
		  );
		    $result=$this->db->insert("ci_aboutus_pages",$insert_data);
		
			return $result;
			
	  }
	 public function all_aboutus_pages()
	  {
		  
		  $this->db->select("*");
		  $this->db->from("ci_aboutus_pages");
		  $result=$this->db->get();
		  return $result->result_array();
		  		  
		  
		  
	  }
	    public function update_aboutus_status($status,$a_id)
	  {
		$update_data=array(
		"status"=>$status
		);  
		  $this->db->where("a_id",$a_id);
		  $result=$this->db->update("ci_aboutus_pages",$update_data);
		  return $result;
		  
	  }
	   public function get_aboutus_by($a_id)
	 {
		 //$user_id=$this->session->userdata("user_id");
		 $this->db->select("*");
		 $this->db->where("a_id",$a_id);
		 $this->db->from("ci_aboutus_pages");
		 $result=$this->db->get();
		 return $result->row_array();
		 
	 }
	 public function aboutus_edit($update_data,$a_id)
	 
	 {
		 
		 $this->db->where("a_id",$a_id);
		 $result=$this->db->update("ci_aboutus_pages",$update_data);
		 return $result;
		 
	 }
	 public function delete_aboutus_page($a_id)
	 {
		 
		 $this->db->where("a_id",$a_id);
		 $result=$this->db->delete("ci_aboutus_pages");
		 return $result;
		 
	 }
	
}
?>