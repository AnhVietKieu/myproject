<?php

	class taikhoan_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_all()
		{
			$this->db->order_by('MaNguoiDung','DESC');
			$query=$this->db->get('taikhoan');
    	    return $query->result_array();

		}

		public function gets_row($id)
		{
			$this->db->where('MaNguoiDung',$id);
			$query=$this->db->get('taikhoan');
    	    return $query->row_array();

		}

		public function sets_new()
		{
            
		    $data = array (
			'HoTen'=> $this->input->post('hoten'),
			'TaiKhoan'=> $this->input->post('username'),
			'MatKhau' => $this->input->post('password'),
			'NgaySinh'=> $this->input->post('ngaysinh'),
			'GioiTinh'=> $this->input->post('gioitinh'),
			'DiaChi'=> $this->input->post('diachi'),
			'Email'=> $this->input->post('email'),
			'DienThoai' => $this->input->post('dienthoai'),
			'MaQuyenHan' => $this->input->post('maquyenhan'),
			'GhiChu' => $this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('taikhoan',$data);
		}

		public function delete_taikhoan($id)
		{
            $this->db->where('MaNguoiDung',$id);
			$this->db->delete('donhang');
			$this->db->where('MaNguoiDung',$id);
			return $this->db->delete('taikhoan');

		}

		public function updates_new()
		{
            
		    $data = array (
			'HoTen'=> $this->input->post('hoten'),
			'TaiKhoan'=> $this->input->post('taikhoan'),
			'MatKhau' => $this->input->post('matkhau'),
			'NgaySinh'=> $this->input->post('ngaysinh'),
			'GioiTinh'=> $this->input->post('gioitinh'),
			'DiaChi'=> $this->input->post('diachi'),
			'Email'=> $this->input->post('email'),
			'DienThoai' => $this->input->post('dienthoai'),
			'MaQuyenHan' => $this->input->post('maquyenhan'),
			'GhiChu' => $this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
            
            $this->db->where('MaNguoiDung',$this->input->post('manguoidung'));
            return $this->db->update('taikhoan',$data);
		}
		
	}