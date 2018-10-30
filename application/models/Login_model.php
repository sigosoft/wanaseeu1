<?php

class Login_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function login($member)
	{
		$this->db->select('*');
		$this->db->from('member');
	//	$this->db->where('user_type','admin');
		$this->db->where('phone',$member['phone']);
		$this->db->where('password',$member['password']);
		return $this->db->get();

		
	}
}



?>