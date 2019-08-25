<?php

	class sach_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_all()
		{
			$this->db->select('*');
			$this->db->from('sach');
			$this->db->join('chude','chude.MaChuDe=sach.MaChuDe');
			$this->db->join('tacgia','tacgia.MaTacGia=sach.MaTacGia');
			$this->db->join('nhaxuatban','nhaxuatban.MaNXB=sach.MaNXB');
			$this->db->order_by('sach.MaSach','DESC');
			$query=$this->db->get();
    	    return $query->result_array();

		}
		public function count_all()
		{
			$this->db->select('count(MaSach) as trang');
			$query=$this->db->get('sach');
    	    return $query->row_array();

		}

		public function gets_limit($limit,$offer)
		{
			

			$this->db->limit($offer,$limit);
			$query=$this->db->get('sach');
    	    return $query->result_array();

		}
		public function gets_row($id)
		{
			$this->db->where('MaSach',$id);
			$query=$this->db->get('sach');
    	    return $query->row_array();

		}
		public function gets_search($id)
		{
			$this->db->where('AnhBia',$id);
			$query=$this->db->get('sach');
    	    return $query->row_array();

		}

		public function sets_new($post_image)
		{   
		    $data = array (
			'TenSach'=>$this->input->post('tensach'),
			'GiaBia'=>$this->input->post('giabia'),
			'MoTa'=>$this->input->post('mota'),
			'AnhBia'=> $post_image,
			'NamXuatBan'=>$this->input->post('namxuatban'),
			'NgayVaoKho'=>$this->input->post('ngayvaokho'),
			'SoLuong'=>$this->input->post('soluong'),
			'MaNXB'=>$this->input->post('manxb'),
			'MaChuDe'=>$this->input->post('machude'),
			'MaTacGia'=>$this->input->post('matacgia'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('sach',$data);
		}

		public function delete_sach($id)
		{
            $this->db->where('MaSach',$id);
			$this->db->delete('chitietdonhang');
			$this->db->where('MaSach',$id);
			return $this->db->delete('sach');

		}

		public function updates_new($post_image)
		{   
		    $data = array (
			'TenSach'=>$this->input->post('tensach'),
			'GiaBia'=>$this->input->post('giabia'),
			'MoTa'=>$this->input->post('mota'),
			'AnhBia'=> $post_image,
			'NamXuatBan'=>$this->input->post('namxuatban'),
			'NgayVaoKho'=>$this->input->post('ngayvaokho'),
			'SoLuong'=>$this->input->post('soluong'),
			'MaNXB'=>$this->input->post('manxb'),
			'MaChuDe'=>$this->input->post('machude'),
			'MaTacGia'=>$this->input->post('matacgia'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
		    
            $this->db->where('MaSach',$this->input->post('masach'));
            return $this->db->update('sach',$data);
		}

		public function updates_khonganh($anhbia)
		{   
		    $data = array (
			'TenSach'=>$this->input->post('tensach'),
			'GiaBia'=>$this->input->post('giabia'),
			'MoTa'=>$this->input->post('mota'),
			'AnhBia'=> $anhbia,
			'NamXuatBan'=>$this->input->post('namxuatban'),
			'NgayVaoKho'=>$this->input->post('ngayvaokho'),
			'SoLuong'=>$this->input->post('soluong'),
			'MaNXB'=>$this->input->post('manxb'),
			'MaChuDe'=>$this->input->post('machude'),
			'MaTacGia'=>$this->input->post('matacgia'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
		    
            $this->db->where('MaSach',$this->input->post('masach'));
            return $this->db->update('sach',$data);
		}
	}