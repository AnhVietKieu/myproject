<?php

	class nhaxuatban_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_all()
		{
			$this->db->order_by('MaNXB','DESC');
			$query=$this->db->get('nhaxuatban');
    	    return $query->result_array();

		}

		public function gets_row($id)
        {
        	$this->db->where('MaNXB',$id);
        	$query=$this->db->get('nhaxuatban');
            return $query->row_array();
        }

         public function delete_nhaxuatban($id)
        {
        	$query_str="SELECT chitietdonhang.MaSach FROM nhaxuatban INNER JOIN sach ON nhaxuatban.MaNXB=sach.MaNXB INNER JOIN chitietdonhang ON sach.MaSach=chitietdonhang.MaSach
				WHERE nhaxuatban.MaNXB= $id LIMIT 0,1";
			$query=$this->db->query($query_str);
			$data=$query->row_array();

			$this->db->where('MaSach',$data['MaSach']);
			$this->db->delete('chitietdonhang');
			$this->db->where('MaNXB',$id);
			$this->db->delete('sach');
			$this->db->where('MaNXB',$id);
			$this->db->delete('nhaxuatban');
        }

		public function sets_new()
		{
            
		    $data = array (
			'TenNXB'=> $this->input->post('tennhaxuatban'),
			'DiaChi'=> $this->input->post('diachi'),
			'DienThoai' => $this->input->post('dienthoai'),
			'GhiChu'=> $this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('nhaxuatban',$data);
		}

		public function updates_new()
		{
            
		    $data = array (
			'TenNXB'=> $this->input->post('tennhaxuatban'),
			'DiaChi'=> $this->input->post('diachi'),
			'DienThoai' => $this->input->post('dienthoai'),
			'GhiChu'=> $this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
            $this->db->where('MaNXB',$this->input->post('manhaxuatban'));
            return $this->db->update('nhaxuatban',$data);
		}
		
		
	}