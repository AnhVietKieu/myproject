<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->model('product_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('cart');
		$this->load->helper('form');
	}
	public function login($value=null)
	{
		if(!file_exists(APPPATH.'views/area/template/login.php'))
		{
			show_404();
		}else
		{
			$this->form_validation->set_rules('username','TaiKhoan','required');
		    $this->form_validation->set_rules('password','MatKhau','required');

		    if($this->form_validation->run() === FALSE)
		    {
	            
	            $this->load->view('area/template/login');

		    }
		    else
		    {
		    	$username=$this->input->post('username');
		    	$password=$this->input->post('password');

		    	if($this->home_model->login($username,$password))
		    	{
		    		$user_id=$this->home_model->login($username,$password);

		    		$name=$user_id['TaiKhoan'];
		    		$level=$user_id['MaQuyenHan'];
		    		

		    		$data = array('name' =>$name,
		    			'level' => $level);
		    		if($level=="Admin")
		    		{
		    			$this->session->set_userdata($data);

						redirect('admin/view-sach/pages/1');  			
		    		}
		    		else
		    		{
		    			if($level=='User')
		    			{
		    				$this->session->set_flashdata('user_fail','Đăng nhập không thành công !');

	       					$this->load->view('area/template/login');
		    			}
		    		}

		    			

		    	}
		    	else
		    	{
		    		$this->session->set_flashdata('user_fail','Đăng nhập không thành công !');

					
	       			$this->load->view('area/template/login');
					

		    	}

		    }
		}
	}
	public function logout_admin()
	{
		//$this->session->unset_data("name");
		$this->session->sess_destroy();


		 $this->load->view('area/template/login');
	} 


}
?>