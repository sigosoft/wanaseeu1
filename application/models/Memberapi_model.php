<?php

class Memberapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function getmember()
	{
		$this->db->select('member_id,name,phone,image');
		$this->db->from('member');
		
		return $this->db->get()->result();

		
	}
	
	public function getgroup($member_id)
	{
	    $this->db->select('member.member_id,groups.group_name,group_members.member_id,group_members.group_id');
	    $this->db->from('member');
	    $this->db->join('groups', 'member.member_id = groups.group_creator', 'inner');
	    $this->db->join('group_members','member.member_id = group_members.member_id', 'inner');
        $this->db->where('member.member_id',$member_id);
	    return $this->db->get()->result();
	}

	

}



?>