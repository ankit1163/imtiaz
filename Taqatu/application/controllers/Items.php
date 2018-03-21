<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class items extends CI_Controller {

	
	function __construct() {
        parent::__construct();
       if($this->session->userdata("user_id")=="")
	{

       redirect();


	}  
	  
    }
	public function add_item()
	{
		
		
		//echo "here";
		if($this->input->post("add_item"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_items");
			$result=$this->m_items->add_item($data,$user_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('add_item', 'item has been added'); 
           redirect("items/add_item");	
				
			}
		}
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/add_item");
	    $this->load->view("users_include/footer");
		
	}
	public function all_user_items()
	{
		
		$this->load->model("m_items");
		$all_item=$this->m_items->all_items();
		//print_r($all_item);
		//die;
		
		$data['all_item']=$all_item;
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/all_items",$data);
	    $this->load->view("users_include/footer");
		
	}
public function update_item_status($status,$item_id)
	{
		$this->load->model("m_items");
		$result=$this->m_items->update_item_status($status,$item_id);
		if($result==1)
		{
		 $this->session->set_flashdata('update_item_status', 'item  has been'." ".$status); 
           redirect("items/all_user_items");	
			
			
		}
				
	}
	public function delete_item($item_id)
	{
		
		$this->load->model("m_items");
		$result=$this->m_items->delete_item($item_id);
		if($result==1)
		{
			
			$this->session->set_flashdata('delete_item', 'item has been deleted.'); 
           redirect("items/all_user_items");	
			
		}
		
		
		
	}
	public function edit_item($item_id)
	
	{
		if($this->input->post("edit_item"))
		{
			$user_id=$this->session->userdata("user_id");
			$data=$_POST;
			$this->load->model("m_items");
			$result=$this->m_items->edit_item($data,$item_id);
			if($result==1)
			{
				
		    $this->session->set_flashdata('edit_item', 'items has been updated'); 
           redirect("items/edit_item/".$item_id);	
				
			}
		}
				
		$this->load->model("m_items");
		$result=$this->m_items->get_item_by_id($item_id);
		//print_r($result);		
		$this->load->view("users_include/header");
	    $this->load->view("users_include/sidebar");
	    $this->load->view("users/edit_item",array('result'=>$result));
	    $this->load->view("users_include/footer");
		
	}
	
	public function all_item()
	{
		// echo "here";
		// die;
		 $this->load->model("m_items");
		 $this->m_items->get_all_item();
	}
	
		public function admin_add_itemtype()
		{
			if($this->input->post("add_item_type"))
			{
				
				$data=$_POST;
				$this->load->model("m_items");
				$result=$this->m_items->admin_add_itemtype($data);
				if($result==1)
				{
					
					$this->session->set_flashdata('admin_add_itemtype', 'Item  has been Added.'); 
				   redirect("items/admin_add_itemtype");	
					
				}
				
				
				
			}
				 $this->load->view("admin_include/header");
				$this->load->view("admin_include/sidebar");
				$this->load->view("admin/add_item");
				$this->load->view("admin_include/footer");
			
		}	


	
	public function admin_all_items()
	{
		$this->load->model("m_items");
		$admin_allitem=$this->m_items->admin_all_items();
		//print_r($admin_allitem);
		//die();
		$data['admin_allitem']=$admin_allitem;
		$this->load->view("admin_include/header");
	$this->load->view("admin_include/sidebar");
	$this->load->view("admin/all_items",$data);
	$this->load->view("admin_include/footer");
	}
	
	public function admin_deleteitem($item_id)
	{
		$this->load->model("m_items");
		$result=$this->m_items->admin_deleteitem($item_id);
		print_r($result);
		if($result==1)
		{
			$this->session->set_flashdata('admin_deleteitem', 'item has been deleted.'); 
           redirect("items/admin_all_items");
		}
	}
	
	
	public function admin_edititem($item_id)
	
	{
		if($this->input->post("admin_edititem"))
		{
			$data=$_POST;
		
			$this->load->model("m_items");
			$result=$this->m_items->admin_edititem($data,$item_id);
			
			if($result==1)
			{
				
		    $this->session->set_flashdata('edit_item', 'items has been updated'); 
           redirect("items/admin_edititem/".$item_id);	
				
			}
		}
				
		$this->load->model("m_items");
		$result=$this->m_items->get_adminitem_by_id($item_id);
	
		
		$this->load->view("admin_include/header");
	    $this->load->view("admin_include/sidebar");
	    $this->load->view("admin/edit_item",array('result'=>$result));
	    $this->load->view("admin_include/footer");
		
	}
	
	

	
}
?>