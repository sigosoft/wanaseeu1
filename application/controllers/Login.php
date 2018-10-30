<?php
 
 class Login extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('Login_model');

 	}
 	public function index()
 	{
 		
       
        

 		$this->load->view('login');
 	}

 /*	public function insert()
 	{
 		$username=$_POST['username'];
 		$password=$_POST['password'];
 		$array= [
          'username'=>$username,
          'password'=>$password

 		];
 		$query=$this->Login_model->insertuser($array);
 		if ($query) {
 			redirect('Login/show');
 		}
 	}*/
    

 	public function login()
 	{
 		$phone=$_POST['phone'];
 		$password=$_POST['password'];
		$array= [
          'phone'=>$phone,
          'password'=>$password

 		];
 		$query=$this->Login_model->login($array);
 		if ($query->num_rows()>0) {
 			redirect('Login/show');
 			//echo "ok";
 		}
 		else
 		{
 			redirect('Login');
 		}

 		//print_r($query);
 	}
 	


 	public function show()
 	{
 		$this->load->view('home');
 	}
 }
?>