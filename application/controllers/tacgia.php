<?php
	
	class tacgia extends CI_Controller
	{
 		public function __construct()
		{
			
			parent::__construct();
		 	$this->load->model('tacgia_model');
		 	$this->load->model('home_model');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');

		}
        
        public function view($slug='view')
		{
			if(!file_exists(APPPATH.'views/area/tables/tacgia/'.$slug.'.php'))
		{
			show_404();
		}

		$data['title']=ucfirst($slug);
        $data['tacgias']=$this->tacgia_model->gets_all();
  	    
		$this->load->view('area/template/header');
	    $this->load->view('area/tables/tacgia/'.$slug,$data);
	    $this->load->view('area/template/footer');

		}

		public function delete($id)
		{

        	if($this->tacgia_model->delete_tacgia($id))
  	        {
  	        	redirect('admin/view-tac-gia.html');

	        }
	        else
	        {
	        	
				redirect('admin/view-tac-gia.html');

	        }
		}

		public function create($slug='create')
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if(!file_exists(APPPATH.'views/area/tables/tacgia/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng tac gia';

			$this->form_validation->set_rules('tentacgia','tentacgia','required');
		    $this->form_validation->set_rules('ngaysinh','ngaysinh','required');
		    $this->form_validation->set_rules('gioitinh','gioitinh','required');
		    $this->form_validation->set_rules('diachi','diachi','required');
		    $this->form_validation->set_rules('email','email','required');
		    $this->form_validation->set_rules('tieusu','tieusu','required');
			$this->form_validation->set_rules('vitri','vitri','required');
			$this->form_validation->set_rules('tinhtrang','TinhTrang','required');

            if($this->form_validation->run()=== FALSE)
            {
            
  				
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/'.$slug,$data);
				$this->load->view('area/template/footer');
            	
            }
            else
            {

            	if($this->tacgia_model->sets_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
  				
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/'.$slug,$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm không thành công !';
			   
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/'.$slug,$data);
				$this->load->view('area/template/footer');

			    }
            }
			
		}

		public function update($id)
		{
                $this->load->helper('form');
			    $this->load->library('form_validation');
  				
				$data['title']='Update bang tac gia';
                $data['update_tacgia']=$this->tacgia_model->gets_row($id);

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/update',$data);
				$this->load->view('area/template/footer');
			   
		}
		public function update_new()
		{

            $this->load->helper('form');
			$this->load->library('form_validation');
			if($this->tacgia_model->updates_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
				$data['title']='Update bang tac gia';
                $data['tacgias']=$this->tacgia_model->gets_all();

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/view',$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm khong thành công !';
 				$data['title']='Update bang chu de';
                $data['tacgias']=$this->tacgia_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/tacgia/view',$data);
				$this->load->view('area/template/footer');
			    }

		}
	}	 
 ?>