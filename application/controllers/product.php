<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->model('product_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		

	}

	public function detail($id)
	{
		if(!file_exists(APPPATH.'views/products/product_detail.php'))
		{
			show_404();
		}else
		{
			$data['menubooks']=$this->home_model->gets_menu('1');
			$data['menustorys']=$this->home_model->gets_menu('2');
	        $data['chitietsach']=$this->product_model->gets_detail($id);
	        $data['products']=$this->product_model->gets_product($id);



	        

			$this->load->view('template/header',$data);
			$this->load->view('products/product_detail',$data);
			$this->load->view('template/footer');
		}
	}
	public function category($id)
	{
		if(!file_exists(APPPATH.'views/products/product_detail.php'))
		{
			show_404();
		}else
		{
			$data['menubooks']=$this->home_model->gets_menu('1');
			$data['menustorys']=$this->home_model->gets_menu('2');
			$data['chude']=$this->product_model->names_chude($id);
	        $data['feature_products']=$this->product_model->gets_category($id);


	        

			$this->load->view('template/header',$data);
			$this->load->view('products/category',$data);
			$this->load->view('template/footer');
		}
	}

}

 ?>