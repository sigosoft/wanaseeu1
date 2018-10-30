<?php
 
 class GroupMember_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('GroupMemberapi_model');
        $this->load->model('Groupapi_model');
        $this->load->model('Memberapi_model');
 	}
 	public function add_groupmember()
 	{
 	    
 	 $group_id=$_POST['group_id'];
 	 $member_id=$_POST['member_id'];
 	 
 	 $array=[
 	     'group_id'=>$group_id,
 	     'member_id'=>$member_id
 	      
 	     ];
 	     
 	     
 	     
 	 
     $group=$this->GroupMemberapi_model->add_groupmember($array);
    
     $return=[
      'message'=>'success',
      
      
     ];
    print_r(json_encode($return));
 	}
 	
 	public function getgroup()
 	{
 	  
 	  $member_id=$_POST['member_id'];
 	    
   //  $group=$this->GroupMemberapi_model->getgroup($member_id);
     $group1=$this->Groupapi_model->getgroup($member_id);
     $return=[
      'message'=>'success',
  //    'group'=>$group,
      'group1'=>$group1
      
     ];
    print_r(json_encode($return));
 	}
 	
 	
 	public function getmember()
 	{
 	  
 	  $group_id=$_POST['group_id'];
 	    
     $member=$this->GroupMemberapi_model->getmember($group_id);
     $member1=$this->Groupapi_model->getmember($group_id);
     $return=[
      'message'=>'success',
      'member'=>$member,
      'member1'=>$member1
      
     ];
    print_r(json_encode($return));
 	}
 
	public function getmemberby_group()
 	{
 	  
 	  $grp_id=$_POST['group_id'];
 	    
     $member=$this->GroupMemberapi_model->getmemberby_group($grp_id);
    $member1=$this->GroupMemberapi_model->databyid($grp_id);
     $return=[
      'message'=>'success',
      'data'=>$member,
      'data1'=>$member1
     ];
    print_r(json_encode($return));
 	}
 	

 }
?>