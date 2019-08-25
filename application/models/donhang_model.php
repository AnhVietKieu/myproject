<?php

	class donhang_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_all()
		{
			$this->db->order_by('MaDonHang','DESC');
			$query=$this->db->get('donhang');
    	    return $query->result_array();

		}

		public function gets_row($id)
        {
        	$this->db->where('MaDonHang',$id);
        	$query=$this->db->get('donhang');
            return $query->row_array();
        }

		public function sets_new()
		{
            
		    $data = array (
			'MaNguoiDung'=>$this->input->post('manguoidung'),
			'DaThanhToan'=>$this->input->post('dathanhtoan'),
			'TinhTrangGiaoHang'=>$this->input->post('tinhtranggiaohang'),
			'NgayDatHang'=>$this->input->post('ngaydathang'),
  			'NgayGiaoHang'=>$this->input->post('ngaygiaohang'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('donhang',$data);
		}

		public function delete_donhang($id)
		{
            $this->db->where('MaDonHang',$id);
			$this->db->delete('chitietdonhang');
			$this->db->where('MaDonHang',$id);
			return $this->db->delete('donhang');

		}

		public function updates_new()
		{
            
		    $data = array (
			'DaThanhToan'=>$this->input->post('dathanhtoan'),
			'TinhTrangGiaoHang'=>$this->input->post('tinhtranggiaohang'),
			'NgayDatHang'=>$this->input->post('ngaydathang'),
  			'NgayGiaoHang'=>$this->input->post('ngaygiaohang'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
            
            $this->db->where('MaDonHang',$this->input->post('madonhang'));
            return $this->db->update('donhang',$data);
		}
		
	}