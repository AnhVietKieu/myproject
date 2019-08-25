<?php

	class taikhoan extends CI_Controller
	{
		public function __construct()
		{
			
			parent::__construct();
		 	$this->load->model('taikhoan_model');
		 	$this->load->model('home_model');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');

		}
        
        public function view($slug='view')
		{
			if(!file_exists(APPPATH.'views/area/tables/taikhoan/'.$slug.'.php'))
		{
			show_404();
		}

		$data['title']=ucfirst($slug);
        $data['taikhoans']=$this->taikhoan_model->gets_all();
      
  	    
		$this->load->view('area/template/header');
	    $this->load->view('area/tables/taikhoan/'.$slug,$data);
	    $this->load->view('area/template/footer');

		}
		

		public function create($slug='create')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if(!file_exists(APPPATH.'views/area/tables/taikhoan/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng tai khoan';

			$this->form_validation->set_rules('hoten','HoTen','required');
		    $this->form_validation->set_rules('username','TaiKhoan','required');
		    $this->form_validation->set_rules('password','MatKhau','required');
		    $this->form_validation->set_rules('ngaysinh','NgaySinh','required');
		    $this->form_validation->set_rules('gioitinh','GioiTinh','required');
		    $this->form_validation->set_rules('diachi','DiaChi','required');
		    $this->form_validation->set_rules('email','Email','required');
		    $this->form_validation->set_rules('dienthoai','DienThoai','required');
			$this->form_validation->set_rules('maquyenhan','MaQuyenHan','required');
			$this->form_validation->set_rules('ghichu','GhiChu','required');
			$this->form_validation->set_rules('tinhtrang','TinhTrang','required');

            if($this->form_validation->run()=== FALSE)
            {
            	

            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/'.$slug,$data);
				$this->load->view('area/template/footer');
            }
            else
            {

            	if($this->taikhoan_model->sets_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
  				
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/'.$slug,$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm không thành công !';
			    $data['menus']=$this->home_model->gets_chude();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/'.$slug,$data);
				$this->load->view('area/template/footer');

			    }
            }
			
		}

		public function delete($id)
		{

        	$data['taikhoans']=$this->taikhoan_model->gets_all();
        	

        	if($this->taikhoan_model->delete_taikhoan($id))
  	        {
  	        	
	    		redirect('admin/view-tai-khoan.html');
	        }
	        else
	        {
	        	redirect('admin/view-tai-khoan.html');

	        }
		}

		public function update($id)
		{
                $this->load->helper('form');
			    $this->load->library('form_validation');
  			
				$data['title']='Update bang tac gia';
                $data['update_taikhoan']=$this->taikhoan_model->gets_row($id);

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/update',$data);
				$this->load->view('area/template/footer');
			   
		}
		public function update_new()
		{

            $this->load->helper('form');
			$this->load->library('form_validation');
			if($this->taikhoan_model->updates_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
				$data['title']='Update bang tac gia';
                $data['taikhoans']=$this->taikhoan_model->gets_all();

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/view',$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm khong thành công !';
				$data['title']='Update bang chu de';
                $data['taikhoans']=$this->taikhoan_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/taikhoan/view',$data);
				$this->load->view('area/template/footer');
			    }

		}
	}