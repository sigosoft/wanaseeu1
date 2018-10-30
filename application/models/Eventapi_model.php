<?php

class Eventapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function create_event($array)
	{
		$this->db->insert('event',$array);

	}
	
		public function get_id($id)
	{
	   
	   $this->db->select('event_id');
		$this->db->from('event');
		$this->db->where('event.event_id',$id);
	   return $this->db->get()->row()->event_id;
	}
	
	
/*	public function group_data()
	{
	   
	   $this->db->select('group_id,group_name,group_creator,group_image');
		$this->db->from('groups');
		return $this->db->get()->result();
	}
	
	public function databyid($grp_id)
	{
	    
		$this->db->select('groups.group_id,groups.group_name,groups.group_image,member.member_id,member.name');
		$this->db->from('groups');
		$this->db->join('member', 'groups.group_creator = member.member_id', 'inner');
    	$this->db->where('groups.group_id',$grp_id);
//$this->db->where('group_id',$grp_id);
		return $this->db->get()->result();

	}
*/
}



?>