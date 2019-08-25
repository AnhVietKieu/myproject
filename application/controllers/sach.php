<?php
	
	class sach extends CI_Controller
	{
        public function __construct()
		{
			
			parent::__construct();

		 	$this->load->model('sach_model');
		 	$this->load->model('home_model');
		 	$this->load->model('utf8_model');
		 	$this->load->model('chude_model');
		 	$this->load->model('nhaxuatban_model');
		 	$this->load->model('tacgia_model');
		 	$this->load->library('session');
		 	$this->load->library('form_validation');
		 	$this->load->helper(array('form', 'url'));
		 	$this->load->library('pagination');


		}
        
        public function view($trang='1')
		{
			if(!file_exists(APPPATH.'views/area/tables/sach/view.php'))
		{
			show_404();
		}

		$data['title']='View sách';
        

        $config['base_url'] = base_url() . 'admin/view-sach/pages/';
        $sotrang=$this->sach_model->count_all();
        $config['total_rows'] =$sotrang['trang'];

        $config["per_page"] = 6;
		$config["uri_segment"] = 4;
		$config["use_page_numbers"] = TRUE;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_tag_open"] = '<li><a href="'.base_url().'admin/view-sach/pages/1">';
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
		  $page = $this->uri->segment(4);
		   if($page==null)
		  {
		  	$page=1;
		  }
		  $start = ($page - 1) * $config["per_page"];


 		$this->pagination->initialize($config);

 		$data['sachs']=$this->sach_model->gets_limit($start,$config["per_page"]);


 		$data['pagination']  = $this->pagination->create_links();
 		$data['sotrang']=$page;

  	    

		$this->load->view('area/template/header');
	    $this->load->view('area/tables/sach/view',$data);
	    $this->load->view('area/template/footer');

		}

		public function delete($id)
		{

        	$data['title']='Bảng chi tiết đơn hàng';
			$data['sachs']=$this->sach_model->gets_all();
			

        	if($this->sach_model->delete_sach($this->uri->setgment(2)))
  	        {
  	        	redirect('admin/view-sach/pages/'.$this->uri->setgment(3));
	        }
	        else
	        {
	        	redirect('admin/view-sach/pages/'.$this->uri->setgment(3));

	        }
		}
		
		public function create($slug='create')
		{

			$data['chudes']=$this->chude_model->gets_all();
			$data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
			$data['tacgias']=$this->tacgia_model->gets_all();

			if(!file_exists(APPPATH.'views/area/tables/sach/'.$slug.'.php'))
			{
				show_404();
			}

			$data['title']='Bảng sach';

			$this->form_validation->set_rules('tensach','TenSach','required');
		    $this->form_validation->set_rules('giabia','GiaBia','required');
		    $this->form_validation->set_rules('mota','MoTa','required');
		    $this->form_validation->set_rules('namxuatban','NamXuatBan','required');
		    $this->form_validation->set_rules('ngayvaokho','NgayVaoKho','required');
		    $this->form_validation->set_rules('soluong','SoLuong','required');
			$this->form_validation->set_rules('manxb','MaNXB','required');
			$this->form_validation->set_rules('machude','MaChuDe','required');
			$this->form_validation->set_rules('matacgia','MaTacGia','required');
			$this->form_validation->set_rules('ghichu','GhiChu','required');
			$this->form_validation->set_rules('tinhtrang','TinhTrang','required');

            if($this->form_validation->run()=== FALSE)
            {

            	$data['title']='Bảng sách';

				$data['chudes']=$this->chude_model->gets_all();
				$data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
				$data['tacgias']=$this->tacgia_model->gets_all();

				$this->load->view('area/template/header');
            	$this->load->view('area/tables/sach/'.$slug,$data);
				$this->load->view('area/template/footer');

            }
            else
            {

            	$config['upload_path'] = './thuvien/images/sach/';
            	$config['allowed_types']='gif|png|jpg|jpeg';
            	$config['max_size']='5048';
            	$config['min_size']='100';
            	$config['max_height']='1000';

            	

            	$this->load->library('upload', $config);

                if (!$this->upload->do_upload('anhbia'))
                {
                        $data['err'] = $this->upload->display_errors();


                        $this->load->view('area/template/header');
	            		$this->load->view('area/tables/sach/'.$slug,$data);
						$this->load->view('area/template/footer');
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
            		$post_image =$_FILES['anhbia']['name'];
            	

            		if($this->sach_model->sets_new($post_image))
            	{	
                    
  					$data['err']='Thêm thành công !';

	  					if($this->utf8_model->convert_machude('sach','TenSach',$this->input->post('tensach'),'MaSach'))
	  					{	

	  						$data['chudes']=$this->chude_model->gets_all();
							$data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
							$data['tacgias']=$this->tacgia_model->gets_all();

	  						$this->load->view('area/template/header');
		            		$this->load->view('area/tables/sach/'.$slug,$data);
							$this->load->view('area/template/footer');

	  					}
                    
			    	}
			    	else
			    	{

			    	$data['err']='Thêm không thành công !';
			    	
            		$this->load->view('area/template/header');
            		$this->load->view('area/tables/sach/'.$slug,$data);
					$this->load->view('area/template/footer');

			    	}
                }
            	
            }
			
		}


		public function update($id)
		{
                 				

				$data['title']='Update bang sach';
                $data['du_lieu']=$this->sach_model->gets_row($id);
                $data['nhaxuatbans']=$this->nhaxuatban_model->gets_all();
                $data['tacgias']=$this->tacgia_model->gets_all();
                $data['chudes']=$this->chude_model->gets_all();



				$this->load->view('area/template/header');
            	$this->load->view('area/tables/sach/update',$data);
				$this->load->view('area/template/footer');
			   
		}

		public function update_new($id)
		{

            

			$config['upload_path']='./thuvien/images/sach/';
            $config['allowed_types']='gif|png|jpg|jpeg';
            $config['max_size']='5048';
        	$config['min_size']='100';
        	$config['max_height']='1000';


        	$post_image =$_FILES['anhbia']['name'];

			$database=$this->sach_model->gets_search($post_image);
			$tenanh=$this->sach_model->gets_row($id);
			
    		

            $this->load->library('upload',$config);

            	if(!$this->upload->do_upload('anhbia'))
            	{
            		
            		//$data['sachs']=$this->sach_model->gets_all();

            		if($this->sach_model->updates_khonganh($tenanh['AnhBia']))
            		{
            			//$data['err']='Thêm thành công !';
						//$data['title']='Update bang sach';

							if($this->utf8_model->convert_machude('sach','TenSach',$this->input->post('tensach'),'MaSach'))
		                	{
		                		
		                		redirect('admin/view-sach/pages/1');
		                	}

							
					  		}
					    	else
					    	{
		  	    			
		  	    				//$data['err']='Thêm khong thành công !';

								redirect('admin/view-sach/pages/1');

					    	}
            		}
            	else
            	{

            		
            		
            		    $data = array('upload_data' => $this->upload->data()); 

						if($this->sach_model->updates_new($post_image,$id))
	            		{	
	                    
	  					//$data['err']='Thêm thành công !';
						//$data['title']='Update bang sach';

	                	//$data['sachs']=$this->sach_model->gets_all();

	                	if($this->utf8_model->convert_machude('sach','TenSach',$this->input->post('tensach'),'MaSach'))
	                	{
	                		
	                		redirect('admin/view-sach/pages/1');
	                	}

						
				  		}
				    	else
				    	{
	  	    			
	  	    				//$data['err']='Thêm khong thành công !';

							redirect('admin/view-sach/pages/1');

				    	}
				    
			}

		}
		
	}