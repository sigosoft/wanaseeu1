<?php
 
 class EventMembers_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('EventMemberapi_model');
  
 	}
 	public function add_eventmember()
 	{
 	    
 	 $event_id=$_POST['event_id'];
 	 $member_id=$_POST['member_id'];
 	 
 	 $array=[
 	     'event_id'=>$event_id,
 	     'member_id'=>$member_id
 	      
 	     ];
 	     
 	     
 	     
 	 
     $group=$this->EventMemberapi_model->add_eventmember($array);
    
     $return=[
      'message'=>'success',
      
      
     ];
    print_r(json_encode($return));
 	}
 	
 
 	

 }
?>