<?php
 
 class Group_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Groupapi_model');
		$this->load->model('GroupMemberapi_model');
        $this->load->model('Memberapi_model');


 	}
 	
 	
 	public function group()
 	{
 	    
 	 $group_name=$_POST['group_name'];
 	 //$group_description=$_POST['group_description'];
 	 $group_creator=$_POST['group_creator'];
 	 $image=$_POST['group_image'];
 	 $member_id=$_POST['member_id'];
 	 $member=json_decode($member_id);
 	 	$url =  FCPATH.'upload/';
				$rand=date('Ymd').mt_rand(1001,9999);
				$userpath = $url.$rand.'.png';
				$path = "upload/".$rand.'.png';
				file_put_contents($userpath,base64_decode($image));
				
				
			//	print_r($member);
 		
 	 
 	 $array=[
 	     'group_name'=>$group_name,
 	    // 'group_description'=>$group_description,
 	      'group_creator'=>$group_creator,
 	      'group_image' =>$path
 	     ];
 	     
 	 
     $group=$this->Groupapi_model->group($array);
    
     $id = $this->db->insert_id();
        
        $data=[
            
            'group_id'=>$id,
            'member_id'=>$group_creator
             
            ];
            
     $group2=$this->GroupMemberapi_model->group3($data);
     
     foreach($member as $members)
       {
           $data1=[
            
            'group_id'=>$id,
            'member_id'=>$members
           
            ];
       $group3=$this->GroupMemberapi_model->group4($data1);
          
            
       }
  
     $return=[
      'message'=>'success'
           ];
           
    print_r(json_encode($return));
 	
  }
 	
 	
 	public function group_data()
 	{
 	    
     $group_data=$this->Groupapi_model->group_data(); 
    
     $return=[
      'message'=>'success',
      'data'=>$group_data
      
     ];
    print_r(json_encode($return));
 	}
 	
 	
 	public function databyid()
 	{
 	   $grp_id=$_POST['group_id'];
    

     $data=$this->Groupapi_model->databyid($grp_id);

     $return=[
      'message'=>'success',
      'data'=>$data
     ];
    print_r(json_encode($return));
 	}
 	
 	
 	public function getgroup()
 	{
 	   $member_id=$_POST['member_id'];
    

     $data=$this->Groupapi_model->getgroup($member_id);
      $data1=$this->Groupapi_model->getgroup1($member_id);
     $return=[
      'message'=>'success',
      'data'=>$data,
      'data'=>$data1
     ];
    print_r(json_encode($return));
 	}
 	
 	
 	public function getmember()
 	{
 	   $grp_id=$_POST['group_id'];
    

     $data=$this->Groupapi_model->getmember($grp_id);

     $return=[
      'message'=>'success',
      'data'=>$data
     ];
    print_r(json_encode($return));
 	}
 
 public function check()
 {
     $member="['']";
 }

 }
?>