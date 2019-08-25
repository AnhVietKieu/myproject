<?php
	
	class chude extends CI_Controller
	{

        public function __construct()
		{
			
			parent::__construct();
			$this->load->model('chude_model');
			$this->load->model('utf8_model');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
		 	

		}

		public function view($slug='view')
		{
			if(!file_exists(APPPATH.'views/area/tables/chude/'.$slug.'.php'))
			{
				show_404();
			}
			$data['chudes']=$this->chude_model->gets_all();

			$this->load->view('area/template/header');
			$this->load->view('area/tables/chude/'.$slug,$data);
			$this->load->view('area/template/footer');
		}

		public function delete($id)
		{

        	if($this->chude_model->delete_chude($id))
  	        {
  	        	redirect('admin/view-chu-de.html');

	        }
	        else
	        {
	        	
				redirect('admin/view-chu-de.html');

	        }
		}

		public function create($slug='create')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if(!file_exists(APPPATH.'views/area/tables/chude/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng chủ đề';

			$this->form_validation->set_rules('tenchude','TenChuDe','required');
			$this->form_validation->set_rules('ghichu','GhiChu','required');
			$this->form_validation->set_rules('tinhtrang','TinhTrang','required');
			$this->form_validation->set_rules('theloai','TheLoai','required');


            if($this->form_validation->run()=== FALSE)
            {
            	

            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/'.$slug,$data);
            	$this->load->view('area/template/footer');

            }
            else
            {

            	if($this->chude_model->sets_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
  				$this->utf8_model->convert_machude('chude','TenChuDe',$this->input->post('tenchude'),'MaChuDe');
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/'.$slug,$data);
            	$this->load->view('area/template/footer');

			    }
			    else
			    {

			    $data['err']='Thêm không thành công !';
			    
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/'.$slug,$data);
            	$this->load->view('area/template/footer');


			    }
            }
			
		}
		
		public function update($id)
		{
                $this->load->helper('form');
			    $this->load->library('form_validation');
 
				$data['title']='Update bang chu de';
                $data['update_chude']=$this->chude_model->gets_row($id);

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/update',$data);
				$this->load->view('area/template/footer');
			   
		}
		public function update_new()
		{

            $this->load->helper('form');
			$this->load->library('form_validation');
			if($this->chude_model->updates_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
				$data['title']='Update bang chu de';
                $data['chudes']=$this->chude_model->gets_all();

                $this->utf8_model->convert_machude('chude','TenChuDe',$this->input->post('tenchude'),'MaChuDe');
               
				$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/view',$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm khong thành công !';
  								$data['title']='Update bang chu de';
                $data['chudes']=$this->chude_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/chude/view',$data);
				$this->load->view('area/template/footer');
			    }

		}
	}