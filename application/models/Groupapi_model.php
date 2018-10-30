<?php

class Groupapi_model extends CI_Model {

	public function _construct()
	{
		parent:: _contruct();
		$this->load->database();

	}

	
	
	public function group($array)
	{
		$this->db->insert('groups',$array);

	}
	
	public function group_data()
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
	
	
		public function getgroup($member_id)
	{
	    
		$this->db->select('groups.group_id,groups.group_name,groups.group_image,member.member_id,member.name');
		$this->db->from('groups');
		$this->db->join('member', 'groups.group_creator = member.member_id', 'inner');
    	$this->db->where('groups.group_creator',$member_id);
//$this->db->where('group_id',$grp_id);
		return $this->db->get()->result();

	}

	public function getgroup1()
	{
	    
		$this->db->select('groups.group_id,groups.group_name,groups.group_image,group_members.member_id,group_members.group_id');
		$this->db->from('groups');
		$this->db->join('group_members', 'groups.group_id = group_members.group_id', 'inner');
    //	$this->db->where('groups.group_id','group_members.group_id');
//$this->db->where('group_id',$grp_id);
		return $this->db->get()->result();

	}


   public function getmember($grp_id)
	{
	$this->db-> SELECT ("groups.*,group_members.*,member.* FROM groups INNER JOIN group_members ON groups.group_id=group_members.group_id INNER JOIN member ON member.member_id=group_members.member_id WHERE groups.group_id='$grp_id'");
	  
	  //		$this->db->select('groups.group_id,groups.group_name,groups.group_image,group_members.member_id,group_members.group_id,member.member_id,member.image,member.phone');
        //   $this->db->from('groups');
	  
	    return $this->db->get()->result();
	}



}



?>