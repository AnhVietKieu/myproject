<?php
	
	class donhang extends CI_Controller
	{
		public function __construct()
		{

           parent::__construct();
           $this->load->model('donhang_model');
           $this->load->model('home_model');
           $this->load->model('taikhoan_model');
           $this->load->library('session');
           $this->load->library('form_validation');

		}

		public function view($slug='view')
		{
			if(!file_exists(APPPATH.'views/area/tables/donhang/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng đơn hàng';
			$data['donhangs']=$this->donhang_model->gets_all();
			

			$this->load->view('area/template/header');
			$this->load->view('area/tables/donhang/'.$slug,$data);
			$this->load->view('area/template/footer');

		}

		public function delete($id)
		{

        	$data['title']='Bảng chi tiết đơn hàng';
			$data['donhangs']=$this->donhang_model->gets_all();
			

        	if($this->donhang_model->delete_donhang($id))
  	        {
  	        	redirect('admin/view-don-hang.html');
				
	        }
	        else
	        {
	        	redirect('admin/view-don-hang.html');

	        }
		}


		public function create($slug='create')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if(!file_exists(APPPATH.'area/views/tables/donhang/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng don hang';

			$this->form_validation->set_rules('manguoidung','manguoidung','required');
		    $this->form_validation->set_rules('dathanhtoan','dathanhtoan','required');
		    $this->form_validation->set_rules('tinhtranggiaohang','tinhtranggiaohang','required');
		    $this->form_validation->set_rules('ngaydathang','ngaydathang','required');
		    $this->form_validation->set_rules('ngaygiaohang','ngaygiaohang','required');
			$this->form_validation->set_rules('ghichu','ghichu','required');
			$this->form_validation->set_rules('tinhtrang','TinhTrang','required');

            if($this->form_validation->run()=== FALSE)
            {
            
            	$data['taikhoans']=$this->taikhoan_model->gets_all();

            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/'.$slug,$data);
				$this->load->view('area/template/footer');
            }
            else
            {

            	if($this->donhang_model->sets_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
  				$data['taikhoans']=$this->taikhoan_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/'.$slug,$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm không thành công !';
			   	$data['taikhoans']=$this->taikhoan_model->gets_all();

                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/'.$slug,$data);
				$this->load->view('area/template/footer');

			    }
            }
			
		}

		public function update($id)
		{
                $this->load->helper('form');
			    $this->load->library('form_validation');
  				
				$data['title']='Update bang chu de';
                $data['update_donhang']=$this->donhang_model->gets_row($id);

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/update',$data);
				$this->load->view('area/template/footer');
			   
		}
		public function update_new()
		{

            $this->load->helper('form');
			$this->load->library('form_validation');
			if($this->donhang_model->updates_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
				$data['title']='Update bang chi tiet don hang';
                $data['donhangs']=$this->donhang_model->gets_all();

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/view',$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm khong thành công !';
				$data['title']='Update bang chu de';
                $data['donhangs']=$this->donhang_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/donhang/view',$data);
				$this->load->view('area/template/footer');
			    }

		}
	}