<?php
 
 class Register extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Register_model');

 	}
 	public function index()
 	{
 		$this->load->view('register');
 	}

  public function insert()
 	{
 		$name=$_POST['username'];
 		$email=$_POST['email'];
 		$phone=$_POST['phone'];
 		$gender=$_POST['gender'];
 		$DOB=$_POST['DOB'];
 	
 		$password1=$_POST['password1'];
 		$password2=$_POST['password2'];
 		
 		 $file = $_FILES['image'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        if(move_uploaded_file($file["tmp_name"], $tar_file))
        {
 		
 		$array= [
          'name'=>$name,
          'email'=>$email,
          'phone' =>$phone,
          'gender'=>$gender,
          'DOB'=>$DOB,
          'image'=>$tar_file,
          'password'=>$password1
 		];
 		$query=$this->Register_model->insertuser($array);
 		if ($query) {
 			redirect('Register/show');
 		}
        }

 	}

 	public function show()
 	{
 		
		$this->load->view('login');
 	}
 /*	public function edit($param)
	{
        $data['brands'] = $this->Brand_model->getBrandsbyid($param);
		$this->load->view('edit_brand.php',$data);
	}
	public function update ($brand_id)
	{
		$brandname=$this->input->post('brandname');
 		$status=$this->input->post('status');
 		$array= [
          'brand_name'=>$brandname,
          'status'=>$status
 		];
         //echo $brand_id;
 		 //print_r($array);
 		$query=$this->Brand_model->updatebrand($array,$brand_id);
 		if ($query) {
 			redirect('Brand/show');
 		}

	}

/*	public function delete($brand_id)
	{
   
 		
 		
         
 		$query=$this->Brand_model->deletebrand($brand_id);
 		if ($query) {
 			redirect('Brand/show');
 		}
	}*/
 }
?>