<?php
 
 class Login_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Loginapi_model');

 	}
 	public function login()
 	{

       
 		$phone=$_POST['phone'];
 	
 		$password=$_POST['password'];
 		
		$array= [
          
          'phone' =>$phone,
          
          'password'=>$password
 		];
 	
     $member=$this->Loginapi_model->login($array);
     if( $member->num_rows() > 0 ){
     $login=$this->Loginapi_model->login_id($array);
     $name=$this->Loginapi_model->name($array);
     $image=$this->Loginapi_model->image($array);

     $return=[
      'message'=>'success',
      'login_id'=>$login,
      'name'=>$name,
      'image'=>$image
     ];
    print_r(json_encode($return));
 	}
 	else
 	{
 	     $return=[
      'message'=>'failed'
      
     ];
    print_r(json_encode($return));
 	}
 	}
 
 }
?>