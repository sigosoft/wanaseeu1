<?php

class Registerapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function register($array)
	{
   return $this->db->insert('member', $array);
		
	}
   
	public function check($array)
	{
		$this->db->select('*');
		$this->db->from('member');
	//	$this->db->where('user_type','admin');
		$this->db->where('phone',$array['phone']);
	
		 return $this->db->get();

		
	}
}



?>