<?php

	class nhaxuatban extends CI_Controller
		{
 			public function __construct()
			{
			
				parent::__construct();
		 		$this->load->model('nhaxuatban_model');
		 		$this->load->model('home_model');
		 		$this->load->library('session');
		 		$this->load->library('form_validation');


			}
        
       		 public function view($slug='view')
				{
					if(!file_exists(APPPATH.'views/area/tables/nhaxuatban/'.$slug.'.php'))
					{
						show_404();
					}

						$data['title']=ucfirst($slug);
       				    $data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
  	    
						$this->load->view('area/template/header');
	    				$this->load->view('area/tables/nhaxuatban/'.$slug,$data);
	    				$this->load->view('area/template/footer');

					}

			public function delete($id)
			{

        		if($this->nhaxuatban_model->delete_nhaxuatban($id))
  	        	{
  	        		redirect('admin/view-nha-xuat-ban.html');

	       		 }
	       		 else
	        	{
	        	
					redirect('admim/view-nha-xuat-ban.html');
	        	}
			}


			public function create($slug='create')
			{
			$this->load->helper('form');
			$this->load->library('form_validation');

			if(!file_exists(APPPATH.'views/area/tables/nhaxuatban/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng nha xuat ban';

			$this->form_validation->set_rules('tennhaxuatban','tennhaxuatban','required');
			$this->form_validation->set_rules('diachi','diachi','required');
			$this->form_validation->set_rules('dienthoai','dienthoai','required');
			$this->form_validation->set_rules('ghichu','ghichu','required');
			$this->form_validation->set_rules('tinhtrang','tinhtrang','required');

            if($this->form_validation->run()=== FALSE)
            {
            	

            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/'.$slug,$data);
				$this->load->view('area/template/footer');
            }
            else
            {

            	if($this->nhaxuatban_model->sets_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
  				
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/'.$slug,$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm không thành công !';
			   
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/'.$slug,$data);
				$this->load->view('area/template/footer');

			    }
            }
			
		}

		public function update($id)
		{
                $this->load->helper('form');
			    $this->load->library('form_validation');
  		
				$data['title']='Update bang nha xuat ban';
                $data['update_nhaxuatban']=$this->nhaxuatban_model->gets_row($id);

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/update',$data);
				$this->load->view('area/template/footer');
			   
		}
		public function update_new()
		{

            $this->load->helper('form');
			$this->load->library('form_validation');
			if($this->nhaxuatban_model->updates_new())
            	{	
                    
  				$data['err']='Thêm thành công !';
				$data['title']='Update bang nha xuat ban';
                $data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/view',$data);
				$this->load->view('area/template/footer');
			    }
			    else
			    {

			    $data['err']='Thêm khong thành công !';
				$data['title']='Update bang chu de';
                $data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
                    
            	$this->load->view('area/template/header');
            	$this->load->view('area/tables/nhaxuatban/view',$data);
				$this->load->view('area/template/footer');
			    }

		}
    }