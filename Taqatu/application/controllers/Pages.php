<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class pages extends CI_Controller {
	function __construct() {
        parent::__construct();
       if($this->session->userdata("user_id")=="")
	{

       redirect();


	}
	  
    }
	public function add_contactus_page()
	{
		if($this->input->post("add_contactus_page"))
		{
			
		   $Contactus_image=$_FILES["file"]["name"];
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
			$data = getimagesize($file_loc);
			 $width = $data[0];
			 $height = $data[1];
			if($width== "2880" && $height == "980"){
				
				 $folder="pages_image/";
            move_uploaded_file($file_loc,$folder.$Contactus_image); 
            $this->load->model("m_pages");
			$result=$this->m_pages->add_contactus_page($Contactus_image);
			if($result==1)
			{
			$this->session->set_flashdata('add_contactus_page', 'Contactus Image has been added'); 
           redirect("pages/add_contactus_page");	
				
			}
			}
			else{
			$this->session->set_flashdata('add_contactus_page', 'Please make sure the height and width is right or not !!'); 
           redirect("pages/add_contactus_page");
			}
           
			
		} 
	    $this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/add_contactus_page");
		$this->load->view("admin_include/footer");
		
		
	}
	public function all_contactus_pages()
	{
		
		$this->load->model("m_pages");
		$all_contactus_pages=$this->m_pages->all_contactus_pages();
		$data["all_contactus_pages"]=$all_contactus_pages;
	    $this->load->view("admin_include/header");
        $this->load->view("admin_include/sidebar");
		$this->load->view("admin/all_contactus_pages",$data);
        $this->load->view("admin_include/footer");
	}
	public function update_contactus_status($status,$c_id)
	{
	     $this->load->model("m_pages");
         $result=$this->m_pages->update_contactus_status($status,$c_id);
         if($result==1)
		 {

           $this->session->set_flashdata('all_contactus_pages','Contactus Pages  has been'." ".$status); 
           redirect("pages/all_contactus_pages");	

		 } 	 
	}	
	public function add_aboutus_page()
	{
		if($this->input->post("add_aboutus_page"))
		{
			
		   $Aboutus_image=$_FILES["file"]["name"];
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="pages_image/";
            move_uploaded_file($file_loc,$folder.$Aboutus_image); 
			$about_content=$_POST['about_content'];
			$this->load->model("m_pages");
			$result=$this->m_pages->add_aboutus_page($Aboutus_image,$about_content);		   
			if($result==1)
			{
				$this->session->set_flashdata('add_aboutus_page', 'Aboutus Image and content has been added'); 
           redirect("pages/add_aboutus_page");	
				
				
			}
			
		} 
	    $this->load->view("admin_include/header");
		$this->load->view("admin_include/sidebar");
		$this->load->view("admin/add_aboutus_page");
		$this->load->view("admin_include/footer");
		
		
	}
	
	public function all_aboutus_pages()
	{
		
		$this->load->model("m_pages");
		$all_aboutus_pages=$this->m_pages->all_aboutus_pages();
		$data["all_aboutus_pages"]=$all_aboutus_pages;
	    $this->load->view("admin_include/header");
        $this->load->view("admin_include/sidebar");
		$this->load->view("admin/all_aboutus_pages",$data);
        $this->load->view("admin_include/footer");
	}
	
	public function update_aboutus_status($status,$a_id)
	{
	     $this->load->model("m_pages");
         $result=$this->m_pages->update_aboutus_status($status,$a_id);
         if($result==1)
		 {

           $this->session->set_flashdata('all_aboutus_pages','Aboutus Pages  has been'." ".$status); 
           redirect("pages/all_aboutus_pages");	

		 } 	 
	}
	public function get_aboutus_pages($a_id)
	
	{
		
		$this->load->model("m_pages");
		$result=$this->m_pages->get_aboutus_by($a_id);
	
		$this->load->view("admin_include/header");
	    $this->load->view("admin_include/sidebar");
	    $this->load->view("admin/aboutus_edit",array('result'=>$result));
	    $this->load->view("admin_include/footer");
		
	}
	public function update_aboutus_page()
	{
		
		 $this->load->model("m_pages");
		if($this->input->post("aboutus_edit"))
		{
			$data=$_POST;
			$a_id=$data["a_id"];
			
			if($_FILES["file"]["name"]=="")
			{
				 
				$update_data=array(
				"uper_image"=>$data["old_image"],
				"content"=>$data["about_content"]
				);
				
				$result=$this->m_pages->aboutus_edit($update_data,$a_id);
				if($result==1)
				{
					
					$this->session->set_flashdata('aboutus_edit', 'about us has been updated'); 
                  redirect("pages/all_aboutus_pages");	
					
				}
				
			}
			else
			{
				
			 $Aboutus_image=$_FILES["file"]["name"];
           	 
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="pages_image/";
            move_uploaded_file($file_loc,$folder.$Aboutus_image); 
			$Aboutus_image=$_FILES["file"]["name"];
			$file_loc= $_FILES['file']['tmp_name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            $folder="pages_image/";
            move_uploaded_file($file_loc,$folder.$Aboutus_image); 
			   $update_data=array(
				"uper_image"=>$Aboutus_image,
				"content"=>$data["about_content"]
				);
			
			
			
			$result=$this->m_pages->aboutus_edit($update_data,$a_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('aboutus_edit', 'about us has been updated'); 
           redirect("pages/all_aboutus_pages");	
				
			}
		}
		}
	
				
		
	}
		public function delete_aboutus_page($a_id)
		{
			$this->load->model("m_pages");
            $result=$this->m_pages->delete_aboutus_page($a_id);	
           if($result==1)
		   {

            $this->session->set_flashdata('aboutus_delete', 'About us has been Deleted.'); 
           redirect("pages/all_aboutus_pages");	

		   }	   
			
		}
		public function delete_contactus_status($c_id)
		{
			
			$this->load->model("m_pages");
			$result=$this->m_pages->delete_contactus_status($c_id);
			if($result==1)
			{
				 $this->session->set_flashdata('contactus_delete', 'Contactus page has been Deleted.'); 
           redirect("pages/all_contactus_pages");	
				
			}
			
		}
}?>