<?php
 
 class Register_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Registerapi_model');

 	}
 	
 	public function register()
 	{

       $name=$_POST['name'];
 		$email=$_POST['email'];
 		$phone=$_POST['phone'];
 		$gender=$_POST['gender'];
 		$DOB=$_POST['DOB'];
        $image=$_POST['image'];
 		$password=$_POST['password'];
 		
 		$url =  FCPATH.'upload/';
				$rand=date('Ymd').mt_rand(1001,9999);
				$userpath = $url.$rand.'.png';
				$path = "upload/".$rand.'.png';
				file_put_contents($userpath,base64_decode($image));
 		
 		$array= [
          'name'=>$name,
          'email'=>$email,
          'phone' =>$phone,
          'gender'=>$gender,
          'DOB'=>$DOB,
          'image'=>$path,
          'password'=>$password
 		];
 		 
 	
 	  $alert=$this->Registerapi_model->check($array);
     if( $alert->num_rows() >0 ){
         $return=[
      'message'=>'user already exists',
      
     ];
    print_r(json_encode($return));
 	}
     
     
 	else{
 	    
 	    $member=$this->Registerapi_model->register($array);
 	    $return=[
      'message'=>'success',
      
     ];
    print_r(json_encode($return));
 	}
 		 
 	}
     
 
 }
?>