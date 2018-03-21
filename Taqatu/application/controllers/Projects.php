<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class projects extends CI_Controller {

	
	function __construct() {
    parent::__construct();
	
	if($this->session->userdata("user_id")=="")
	{

       redirect();


	}
	  
    }
	public function add_project()
	{
		if($this->input->post("add_project"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_projects");
			$result=$this->m_projects->add_project($data,$user_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('add_project', 'projects has been added'); 
           redirect("projects/add_project");	
				
			}
		}
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/add_project");
	    $this->load->view("users_include/footer");
		
	}
	public function update_project()
	{
			$data=$_POST;
		/* 	print_r($data);
			die; */
			$this->load->model("m_projects");
			$result=$this->m_projects->update_project($data);
			if($result==1)
			{
			echo "true";
			die;
			}
			else{
				echo "false";
				die;
			}
		
	}
	public function update_project_area()
	{
			$data=$_POST;
			
			$this->load->model("m_projects");
			$result=$this->m_projects->update_project_area($data);
			if($result==1)
			{
			echo "true";
			die;
			}
			else{
			echo "false";
			die;
			}
		
	}
	public function insert_project_budget()
	{
			$user_id =$this->session->userdata("user_id");
			$this->load->model("m_projects");
			$data = array(
			"pro_id"=>$_POST['p_id'],
			"user_id"=>$user_id,
			"pro_price"=>$_POST['budget']
			);
			$result=$this->m_projects->insert_project_budget($data);
			
			if($result==1)
			{
			$result12=$this->m_projects->get_project_budget($_POST['p_id']);
			$this->load->view("home/budget_box",['result12'=>$result12]);
			}
			else{
			echo "false";
			die;
			}
		
	}	
	public function update_project_floor()
	{
			$data=$_POST;
			$this->load->model("m_projects");
			$result=$this->m_projects->update_project_floor($data);
			if($result==1)
			{
			echo "true";
			die;
			}
			else{
			echo "false";
			die;
			}
		
	}
	public function update_project_location()
	{
		
			
			$data=$_POST;
			$this->load->model("m_projects");
			$result=$this->m_projects->update_project_location($data);
			
			if($result==1)
			{
			echo "true";
			die;
			}
			else{
			echo "false";
			die;
			}
		
		
		
	}
	public function update_participate()
	{
			$this->load->model("m_projects");
			$check=$this->m_projects->get_project_participate_exist($_POST['user_id']);
			if($check == ''){
			$exist_id=$this->session->userdata("user_id");
			$data=array(
		
		 "user_id"=>$exist_id,
		 "role"=>$_POST['role'],
		 "pro_id"=>$_POST['p_id'],
		 "add_users"=>$_POST['user_id']
		 );
			
			
			$result=$this->m_projects->insert_project_participate($data);
			$result12=$this->m_projects->get_project_participate($_POST['p_id']);
			//$this->session->set_flashdata('already_participate', 'added '); 
			$this->load->view("home/participate_user",['result12'=>$result12]);
			}
			else{
				$result12=$this->m_projects->get_project_participate($_POST['p_id']);
				//$this->session->set_flashdata('already_participate', 'already have '); 
				$this->load->view("home/participate_user",['result12'=>$result12]);
				}
			
	}
	public function all_projects()
	{
		
		$this->load->model("m_projects");
		$all_project=$this->m_projects->all_projects();
		// print_r($all_project);
	
		
		$data['all_project']=$all_project;
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/all_projects",$data);
	    $this->load->view("users_include/footer");
		
	}
	public function participate_project()
	{
		$p_id= $this->uri->segment(3);  
		$this->load->model("m_projects");
		$all_project=$this->m_projects->all_projects();
		$result12=$this->m_projects->get_project_participate($p_id);
		$this->load->view("home_include/header");
		$this->load->view("home/project_participate",['result12'=>$result12,'p_id'=>$p_id]);
		$this->load->view("home_include/footer");
		
	}
	public function all_participate()
	{
		
		$this->load->model("m_projects");
		$all_project=$this->m_projects->all_projects();
		if(!empty($all_project)){
		foreach($all_project as $pro){
			
			@$participate[] = $this->m_projects->all_participate($pro['p_id']);
			
		}
		}
		$data['all_project']=$all_project;
		$data['all_participate']=@$participate;
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/all_participate",$data);
	    $this->load->view("users_include/footer");
		
	}
	public function update_project_status($status,$p_id)
	{
		$this->load->model("m_projects");
		$result=$this->m_projects->update_project_status($status,$p_id);
		if($result==1)
		{
		   $this->session->set_flashdata('update_project_status', 'projects  has been'." ".$status); 
           redirect("projects/all_projects");	
			
			
		}
				
	}
	public function delete_project($p_id)
	{
		
		$this->load->model("m_projects");
		$result=$this->m_projects->delete_project($p_id);
		$result1=$this->m_projects->delete_particiate_by_project($p_id);
		if($result==1)
		{
			
			$this->session->set_flashdata('delete_project', 'project has been deleted.'); 
           redirect("projects/all_projects");	
			
		}
		
		
		
	}
	public function delete_participate($p_id)
	{
		$this->load->model("m_projects");
		$result=$this->m_projects->delete_participate($p_id);
		if($result==1)
		{
			$this->session->set_flashdata('delete_participate', 'project has been deleted.'); 
           redirect("projects/all_participate");	
	}
	}
	public function participate_del()
	{
			$p_id= $this->uri->segment(4);  
			$user_id= $this->uri->segment(3);  
		$this->load->model("m_projects");
		$result=$this->m_projects->delete_participate($user_id);
		if($result==1)
		{
			$this->session->set_flashdata('delete_participate', 'participate has been deleted.'); 
           redirect("projects/participate_project/".$p_id);	
	}
	}
	public function budget_del()
	{
			$p_id= $this->uri->segment(4);  
			$budget_id= $this->uri->segment(3);  
		$this->load->model("m_projects");
		$result=$this->m_projects->delete_budget($budget_id);
		if($result==1)
		{
			$this->session->set_flashdata('delete_participate', 'participate has been deleted.'); 
           redirect("home/budget/".$p_id);	
	}
	}
	public function edit_project($p_id)
	
	{
		if($this->input->post("edit_project"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_projects");
			$result=$this->m_projects->edit_project($data,$p_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('edit_project', 'projects has been updated'); 
           redirect("projects/edit_project/".$p_id);	
				
			}
		}
				
		$this->load->model("m_projects");
		$result=$this->m_projects->get_project_by_id($p_id);
		//print_r($result);		
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/edit_project",array('result'=>$result));
	    $this->load->view("users_include/footer");
		
	}
	public function edit_participate($p_id)
	
	{
		if($this->input->post("edit_participate"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			/* $p_id=$data['p_id'];
			print_r($data);
			die; */
			$this->load->model("m_projects");
			$result=$this->m_projects->edit_participate($data,$p_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('edit_participate', 'projects has been updated'); 
           redirect("projects/edit_participate/".$p_id);	
				
			}
		}
				
		$this->load->model("m_projects");
		$result=$this->m_projects->get_participate_by_id($p_id);
		$userss=$this->m_projects->get_all_users();
		//print_r($result);		
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/edit_participate",array('result'=>$result,'userss'=>$userss));
	    $this->load->view("users_include/footer");
		
	}
	
	public function get_all_projects()
	{
		// echo "here";
		// die;
		 $this->load->model("m_projects");
		 $this->m_projects->get_all_projects();
	}
       
public function user_projects()
{


	    $this->load->view("users_include/header");
		$this->load->view("users/projects");	
		$this->load->view("users_include/footer");
		

}
 public function search_keyword()
    {
        $this->load->model('m_projects'); 
        
        $result=$this->m_projects->booktable($_POST["keyword"]);
		$data["result"]=$result;
    	$this->load->view("home/search_user",$data);

 } 

}

?>