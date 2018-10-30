<?php

class EventMemberapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function add_eventmember($array)
	{
		$this->db->insert('event_members',$array);

	}
	
	
	public function event2($data)
	{
		$this->db->insert('event_members',$data);

	}
	

	
	

}



?>