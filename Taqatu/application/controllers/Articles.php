<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class articles extends CI_Controller {

	
	function __construct() {
        parent::__construct();
        if($this->session->userdata("user_id")=="")
	{

       redirect();


	} 
	  
    }
	public function add_article()
	{
		if($this->input->post("add_article"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_articles");
			$result=$this->m_articles->add_article($data,$user_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('add_article', 'articles has been added'); 
           redirect("articles/add_article");	
				
			}
		}
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/add_article");
	    $this->load->view("users_include/footer");
		
	}
	public function all_articles()
	{
		
		$this->load->model("m_articles");
		$all_article=$this->m_articles->all_articles();
		// print_r($all_article);
	
		
		$data['all_article']=$all_article;
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/all_articles",$data);
	    $this->load->view("users_include/footer");
		
	}
	public function update_article_status($status,$a_id)
	{
		$this->load->model("m_articles");
		$result=$this->m_articles->update_article_status($status,$a_id);
		if($result==1)
		{
		 $this->session->set_flashdata('update_article_status', 'articles  has been'." ".$status); 
           redirect("articles/all_articles");	
			
			
		}
				
	}
	public function delete_article($a_id)
	{
		
		$this->load->model("m_articles");
		$result=$this->m_articles->delete_article($a_id);
		if($result==1)
		{
			
			$this->session->set_flashdata('delete_article', 'article has been deleted.'); 
           redirect("articles/all_articles");	
			
		}
		
		
		
	}
	public function edit_article($a_id)
	
	{
		if($this->input->post("edit_article"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_articles");
			$result=$this->m_articles->edit_article($data,$a_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('edit_article', 'articles has been updated'); 
           redirect("articles/edit_article/".$a_id);	
				
			}
		}
				
		$this->load->model("m_articles");
		$result=$this->m_articles->get_article_by_id($a_id);
		//print_r($result);		
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/edit_article",array('result'=>$result));
	    $this->load->view("users_include/footer");
		
	}
	public function get_all_articles()
	{
		// echo "here";
		// die;
		 $this->load->model("m_articles");
		 $this->m_articles->get_all_articles();
	}		
	
}
?>