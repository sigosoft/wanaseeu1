<?php

class GroupMemberapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function add_groupmember($array)
	{
		$this->db->insert('group_members',$array);

	}
	
	public function group3($data)
	{
		$this->db->insert('group_members',$data);

	}
	
	public function group4($data1)
	{
		$this->db->insert('group_members',$data1);

	}
	
	public function getmemberby_group($grp_id)
	{
	   
	   $this->db->select('group_members.group_id,group_members.member_id');
		$this->db->from('group_members');
		$this->db->join('member', 'group_members.member_id = member.member_id', 'inner');
		$this->db->where('group_members.group_id',$grp_id);
		return $this->db->get()->result();
		
	}
	
	
	public function getgroup($member_id)
	{
	   
   $this->db->select('group_members.group_id,group_members.member_id,groups.group_name,groups.group_image');
		$this->db->from('group_members');
		$this->db->join('groups', 'group_members.group_id = groups.group_id', 'left');
	//	$this->db->join('member', 'group_members.member_id = member.member_id', 'inner');
	//	$this->db->join('member', 'group_members.member_id = member.member_id', 'inner');
		$this->db->where('group_members.member_id',$member_id);
		return $this->db->get()->result();
		

		
	}
	
	
	public function getmember($group_id)
	{
	   
        $this->db->select('group_members.group_id,group_members.member_id,groups.group_name,groups.group_creator');
		$this->db->from('group_members');
		$this->db->join('groups', 'group_members.group_id = groups.group_id', 'left');
		$this->db->join('member', 'group_members.group_id = member.member_id', 'left');
	//	$this->db->join('member', 'group_members.member_id = member.member_id', 'inner');
		$this->db->where('group_members.group_id',$group_id);
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
	
	

}



?>