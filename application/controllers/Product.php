<?php

class Product extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Product_model');
		$this->load->model('Brand_model');

	}

public function index()
	{
      $data['brands'] = $this->Brand_model->getBrands();
		$this->load->view('create_product',$data);
      //print_r($data);
	}	
public function insert()
 	{



	    $UID=$_POST['UID'];
 		$productname=$_POST['Productname'];
 		$modelno=$_POST['modelno'];
 		$price=$_POST['Price'];
 	    $brand=$_POST['brand'];

 		
 		
 	    $file = $_FILES['image'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        if(move_uploaded_file($file["tmp_name"], $tar_file))
        {
            
            $array= [
 		   'UID'=>$UID,
          'product_name'=>$productname,
          'model_no'=>$modelno,
          'brand_id'=>$brand,
          'price'=>$price,
          'video'=>$tar_file
      ];

      $query=$this->Product_model->insertproduct($array);
 		if ($query)
 		{
 			redirect('Product/show');
 		}
           // $data['status'] = 'Active';
           //$this->Product_model->insertproduct($data);

           // $this->db->insert('product',$data);
            //redirect('product');
        }

  
 	}
public function show()
 	{
 		$data['products'] = $this->Product_model->getProducts();
 		//print_r($data);
		$this->load->view('manage_product',$data);
 	}
public function edit($param)
	{
		$data['brands'] =   $this->Brand_model->getBrands();
        $data['products'] = $this->Product_model->getProductsbyid($param);
		$this->load->view('edit_product.php',$data);
		//print_r($data);
	}
public function videoedit($product_id)
	{
		 $data['products'] = $this->Product_model->getProductsbyid($product_id);
		$this->load->view('editvideo.php',$data);
	}

public function update_video($product_id)
{
 	 
 $file = $_FILES['video'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        if(move_uploaded_file($file["tmp_name"], $tar_file))
        {
            
            $array= [
 		   
          'video'=>$tar_file
           ];

      $query=$this->Product_model->updatevideo($array,$product_id);
 		if ($query)
 		{
 			redirect('Product/show');
 		}	 


          }
    }

public function update($product_id)
	{
		$UID=$this->input->post('UID');
 		$productname=$this->input->post('Productname');
 		$modelno=$this->input->post('modelno');
 		$price=$this->input->post('Price');
 	    $brand=$this->input->post('brand');

 		$array= [
 		   'UID'=>$UID,
          'product_name'=>$productname,
          'model_no'=>$modelno,
          'brand_id'=>$brand,
          'price'=>$price

 		];
         
 		$query=$this->Product_model->updateproduct($array,$product_id);
 		if ($query) 
 		{
 			redirect('Product/show');
 		}

	}


}

?>