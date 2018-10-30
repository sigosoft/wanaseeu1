<?php

class Loginapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function login($array)
	{
		$this->db->select('*');
		$this->db->from('member');
	//	$this->db->where('user_type','admin');
		$this->db->where('phone',$array['phone']);
		$this->db->where('password',$array['password']);
		return $this->db->get();

		
	}
		public function login_id($array)
	{
		$this->db->select('member_id');
		$this->db->from('member');
        $this->db->where('phone',$array['phone']);
		$this->db->where('password',$array['password']);
	    return $this->db->get()->row()->member_id;
		

		
	}
	
		public function name($array)
	{
		$this->db->select('name');
		$this->db->from('member');
        $this->db->where('phone',$array['phone']);
		$this->db->where('password',$array['password']);
	    return $this->db->get()->row()->name;
		
	}
	
		public function image($array)
	{
		$this->db->select('image');
		$this->db->from('member');
        $this->db->where('phone',$array['phone']);
		$this->db->where('password',$array['password']);
	    return $this->db->get()->row()->image;
		

		
	}
}



?>