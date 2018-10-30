<?php
 
 class Members_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Memberapi_model');

 	}
 	public function getmember()
 	{
     $members=$this->Memberapi_model->getmember();
    
     $return=[
      'message'=>'success',
      'members'=>$members,
      
     ];
    print_r(json_encode($return));
 	}
 	
 	public function getgroup()
 	{
 	 $member_id = $_POST['member_id'];
 	    
 	    $group=$this->Memberapi_model->getgroup($member_id);
 	    
 	    $return=[
 	        'message'=>'success',
 	        'group'=>$group
 	        ];
 	        print_r(json_encode($return));
 	}
 }
?>