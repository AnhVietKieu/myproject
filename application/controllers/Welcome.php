<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->model('product_model');
		$this->load->model('utf8_model');
		$this->load->model('ajax_pagination_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('cart');
		$this->load->helper('form');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');

		$number_products1=$this->product_model->count_all('1');
		$number_products2=$this->product_model->count_all('2');

		$data['hot_products1']=$this->home_model->gets_products($number_products1['trang']-4,'4');
		$data['hot_products2']=$this->home_model->gets_products($number_products1['trang']-8,'4');
		$data['feature_products']=$this->home_model->gets_products_story($number_products2['trang']-8,'8');


		$this->load->view('template/header',$data);
		$this->load->view('pages/home',$data);
		$this->load->view('template/footer');
	}
	
	public function login($slug='login')
	{
		
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');
		
		if(!file_exists(APPPATH.'views/user/'.$slug.'.php'))
		{
			show_404();
		}


		$this->form_validation->set_rules('username','TaiKhoan','required');
	    $this->form_validation->set_rules('password','MatKhau','required');

	    if($this->form_validation->run() === FALSE)
	    {
           
		

			$this->load->view('template/header',$data);
	        $this->load->view('user/'.$slug,$data);
			$this->load->view('template/footer');

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

	    		$this->session->set_userdata($data);

   				redirect('');

	    	}
	    	else
	    	{
	    		$this->session->set_flashdata('user_fail','Đăng nhập không thành công !');

	    		

				$this->load->view('template/header',$data);
       			$this->load->view('user/'.$slug,$data);
				$this->load->view('template/footer');

	    	}

	    }
	}

	    public function search()
		{
			$search=trim($this->input->post('timkiem'));
			$str=$this->utf8_model->xuly($search);

			$data = array('search' =>$str
	    			);

	    		$this->session->set_userdata($data);
	    		redirect("timkiem/".$search.'.html');

		}
		public function timkiem($value)
		{
			$data['menubooks']=$this->home_model->gets_menu('1');
			$data['menustorys']=$this->home_model->gets_menu('2');

			if(!file_exists(APPPATH.'views/pages/search.php'))
			{
				show_404();
			}

			$search=$this->utf8_model->catdau($this->session->userdata('search'));
			$data['timkiem']=$search;

              
			if($search!="")
			{
				$data['searchs']=$this->home_model->search($search);

				

				 if(empty($data['search']))
             {

             	$data['err']="";
             	
             	$this->load->view('template/header',$data);
           		$this->load->view('pages/search',$data);
				$this->load->view('template/footer');

             }
             else
             {
             	
             	$this->load->view('template/header',$data);
           		$this->load->view('pages/search',$data);
				$this->load->view('template/footer');

             }
			}
		}

	public function logout()
	{
		//$this->session->unset_data("name");
		$this->session->sess_destroy();
		redirect("");
	} 


	public function register($slug='register')
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');
		
		if(!file_exists(APPPATH.'views/user/'.$slug.'.php'))
			{
				show_404();
			}


			$this->form_validation->set_rules('hoten','HoTen','required');
		    $this->form_validation->set_rules('username','TaiKhoan','required');
		    $this->form_validation->set_rules('password','MatKhau','required');
		    $this->form_validation->set_rules('ngaysinh','NgaySinh','required');
		    $this->form_validation->set_rules('gioitinh','GioiTinh','required');
		    $this->form_validation->set_rules('diachi','DiaChi','required');
		    $this->form_validation->set_rules('email','Email','required');
		    $this->form_validation->set_rules('dienthoai','DienThoai','required');

			
			if($this->form_validation->run() === FALSE)
			{
				

				$this->load->view('template/header',$data);
           		$this->load->view('user/'.$slug,$data);
				$this->load->view('template/footer');

			}
			else
			{
				$username=$this->input->post('username');
	    		$password=$this->input->post('password');

				if($this->home_model->check_username_exists($this->input->post('username')))
				{

					if($this->home_model->add())
					{
						if($this->home_model->login($username,$password))
						{
							$user_id=$this->home_model->login($username,$password);
							$name=$user_id['TaiKhoan'];
		    				$level=$user_id['MaQuyenHan'];
		    		

		    				$data = array('name' =>$name,'level' => $level);

		    				$this->session->set_userdata($data);
	   						redirect('');
	   					}

					}

				}
				else
				{
					$data['erorrs']='Tài khoản đã tồn tại';

					$this->load->view('template/header',$data);
           			$this->load->view('user/'.$slug,$data);
					$this->load->view('template/footer');

				}

				
			}	
	}
	public function product_book($trang=null)
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');
		
       
             
            // custom paging configuration
        $sotrang=$this->product_model->count_all('1');
        $config['base_url'] = base_url() . 'product-book/pages/';
        $config['total_rows'] =$sotrang['trang'];

		$config["per_page"] = 6;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = true;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li><a href="'.base_url().'product-book/pages/1">';
		$config["first_tag_close"] = '</a></li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href=''>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 2;

		  $this->pagination->initialize($config);
		  $page = $this->uri->segment(3);
		  if($page==null)
		  {
		  	$page=1;
		  }
		 
		  $start = ($page - 1) * $config["per_page"];

 		$this->pagination->initialize($config);

 		$data['feature_products']=$this->home_model->gets_products($start,$config["per_page"]);
 		$data['pagination']  = $this->pagination->create_links();

	  

        
		$this->load->view('template/header',$data);
		$this->load->view('pages/products_book',$data);
		$this->load->view('template/footer');
	}
	public function product_story($value=null)
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');

		$config['base_url'] = base_url() . 'product-story/pages/';
        $sotrang=$this->product_model->count_all('2');
        $config['total_rows'] =$sotrang['trang'];

        $config["per_page"] = 6;
		$config["uri_segment"] = 3;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li><a href="'.base_url().'product-book/pages/1">';
		$config["first_tag_close"] = '</a></li>';
		$config["last_tag_open"] = '<li>';
		$config["last_tag_close"] = '</li>';
		$config['next_link'] = '&gt;';
		$config["next_tag_open"] = '<li>';
		$config["next_tag_close"] = '</li>';
		$config["prev_link"] = "&lt;";
		$config["prev_tag_open"] = "<li>";
		$config["prev_tag_close"] = "</li>";
		$config["cur_tag_open"] = "<li class='active'><a href=''>";
		$config["cur_tag_close"] = "</a></li>";
		$config["num_tag_open"] = "<li>";
		$config["num_tag_close"] = "</li>";
		$config["num_links"] = 2;

		  $this->pagination->initialize($config);
		  $page = $this->uri->segment(3);
		   if($page==null)
		  {
		  	$page=1;
		  }
		  $start = ($page - 1) * $config["per_page"];

 		$this->pagination->initialize($config);

 		$data['feature_products']=$this->home_model->gets_products_story($start,$config["per_page"]);
 		$data['pagination']  = $this->pagination->create_links();


		$this->load->view('template/header',$data);
		$this->load->view('pages/products_story',$data);
		$this->load->view('template/footer');
	}
	public function contact()
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');

		$this->load->view('template/header',$data);
		$this->load->view('pages/contact');
		$this->load->view('template/footer');
	}
}
