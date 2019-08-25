<?php

	class tacgia_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_all()
		{
			$this->db->order_by('MaTacGia','DESC');
			$query=$this->db->get('tacgia');
    	    return $query->result_array();

		}

		public function gets_row($id)
		{
			$this->db->where('MaTacGia',$id);
			$query=$this->db->get('tacgia');
    	   return $query->row_array();

		}

		 public function delete_tacgia($id)
        {
        	$query_str="SELECT chitietdonhang.MaSach FROM tacgia INNER JOIN sach ON tacgia.MaTacGia=sach.MaTacGia INNER JOIN chitietdonhang ON sach.MaSach=chitietdonhang.MaSach
				WHERE tacgia.MaTacGia= $id LIMIT 0,1";
			$query=$this->db->query($query_str);
			$data=$query->row_array();

			$this->db->where('MaSach',$data['MaSach']);
			$this->db->delete('chitietdonhang');
			$this->db->where('MaTacGia',$id);
			$this->db->delete('sach');
			$this->db->where('MaTacGia',$id);
			$this->db->delete('tacgia');
        }

		public function sets_new()
		{
            
		    $data = array (
			'TenTacGia'=> $this->input->post('tentacgia'),
			'NgaySinh'=> $this->input->post('ngaysinh'),
			'GioiTinh' => $this->input->post('gioitinh'),
			'DiaChi'=> $this->input->post('diachi'),
			'Email'=> $this->input->post('email'),
			'TieuSu' => $this->input->post('tieusu'),
			'ViTri' => $this->input->post('vitri'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('tacgia',$data);
		}
        
        public function updates_new()
		{
            
		    $data = array (
			'TenTacGia'=> $this->input->post('tentacgia'),
			'NgaySinh'=> $this->input->post('ngaysinh'),
			'GioiTinh' => $this->input->post('gioitinh'),
			'DiaChi'=> $this->input->post('diachi'),
			'Email'=> $this->input->post('email'),
			'TieuSu' => $this->input->post('tieusu'),
			'ViTri' => $this->input->post('vitri'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
            
            $this->db->where('MaTacGia',$this->input->post('matacgia'));
            return $this->db->update('tacgia',$data);
		}

		
	}