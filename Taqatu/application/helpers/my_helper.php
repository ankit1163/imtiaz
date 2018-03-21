<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_user_details')){
   function get_user_details($user_id){
       
       $ci =& get_instance();
       
       //load databse library
       $ci->load->model('m_users');
	   $result=$ci->m_users->get_user($user_id);
       return $result;
       //get data from database
       // $query = $ci->db->get_where('users',array('id'=>$id));
       
       // if($query->num_rows() > 0){
           // $result = $query->row_array();
           // return $result;
       // }else{
           // return false;
       // }
   }  
    function get_user_project($user_id){
       
       $ci =& get_instance();
      
       $ci->load->model('m_users');
	   $result=$ci->m_users->get_user_projects($user_id);
       return $result;
     
   } 
}