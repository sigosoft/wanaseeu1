<?php
 
 class Event_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Eventapi_model');
        $this->load->model('EventMemberapi_model');
 	}
 	public function create_event()
 	{
 	    
 	 $event_name=$_POST['event_name'];
 	 $event_date=$_POST['event_date'];
 	 $event_time=$_POST['event_time'];
 	 $event_time2=$_POST['event_time2'];
    // $event_location=$_POST['event_location'];
 	 $event_address=$_POST['event_address'];
 	 $event_description=$_POST['event_description'];
 	 $event_type=$_POST['event_type'];
 	 $event_creator=$_POST['event_creator'];
 	 $latitude=$_POST['latitude'];
 	 $longitude=$_POST['longitude'];
 	 $array=[
 	     'event_name'=>$event_name,
 	   
 	      'event_date'=>$event_date,
 	      'event_time'=>$event_time,
 	    //  'event_location'=>$event_location,
 	      'event_address' =>$event_address,
 	      'event_description'=>$event_description,
 	      'event_type'=>$event_type,
 	      'event_creator'=>$event_creator,
 	      'event_time2'=>$event_time2,
 	      'latitude'=>$latitude,
 	      'longitude'=>$longitude
 	     ];
 	     
 	 
     $group=$this->Eventapi_model->create_event($array);
     
       $id = $this->db->insert_id();
        
        $data=[
            
            'event_id'=>$id,
            'member_id'=>$event_creator,
            
            ];
            
     $group2=$this->EventMemberapi_model->event2($data);
     $event_id=$this->Eventapi_model->get_id($id);
    
     $return=[
      'message'=>'success',
      'event_id'=>$event_id
      
     ];
    print_r(json_encode($return));
 	}
 	
 	
/* 	public function group_data()
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
 	}*/
 }
?>