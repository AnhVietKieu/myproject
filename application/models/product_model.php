<?php 
	class product_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function search_name($id,$value)
		{
			$this->db->like('MaLink',$id);
            $query=$this->db->get($value);
            return $query->row_array();
		}
		public function gets_detail($id)
		{
			$data=$this->search_name($id,'sach');
			$masach=$data['MaSach'];

            $query_str="SELECT * FROM sach 
  						INNER JOIN chude on sach.MaChuDe=chude.MaChuDe 
						LEFT OUTER JOIN nhaxuatban on sach.MaNXB=nhaxuatban.MaNXB 
						LEFT OUTER JOIN tacgia on sach.MaTacGia = tacgia.MaTacGia 
						Where sach.MaSach = '$masach'";

            $query=$this->db->query($query_str);
            
			return $query->row_array();

		}
		public function gets_product($id)
		{
			$data=$this->search_name($id,'sach');
			$machude=$data['MaChuDe'];

            $query_str="SELECT sach.MaSach, sach.TenSach,sach.GiaBia, sach.MoTa, sach.AnhBia,sach.NamXuatBan,
            			sach.NgayVaoKho, sach.SoLuong,sach.MaNXB,sach.MaChuDe,sach.MaTacGia,sach.GhiChu,sach.TinhTrang,sach.MaLink  FROM sach 
  						INNER JOIN chude on sach.MaChuDe=chude.MaChuDe 
						LEFT OUTER JOIN nhaxuatban on sach.MaNXB=nhaxuatban.MaNXB 
						LEFT OUTER JOIN tacgia on sach.MaTacGia = tacgia.MaTacGia 
						Where sach.MaChuDe = '$machude' limit 0,4";

            $query=$this->db->query($query_str);
            
			return $query->result_array();

		}

		public function gets_category($id)
		{
			$data=$this->search_name($id,'chude');

			$this->db->where('MaChuDe',$data['MaChuDe']);
			$query=$this->db->get('sach');
			return $query->result_array();

		}
		public function names_category($id)
		{
			
             $this->db->where('MaChuDe',$id);
			$query=$this->db->get('chude');
			return $query->row_array();
		}
		public function names_chude($id)
		{
			$data=$this->search_name($id,'chude');

             $this->db->where('MaChuDe',$data['MaChuDe']);
			$query=$this->db->get('chude');
			return $query->row_array();
		}
		public function find_product($id)
	 	{
	  		$this->db->where('MaSach',$id);
	  		$query = $this->db->get("sach");
	 		return $query->row_array();
	 	}
	 	 public function count_all($id)
        {
        	$query_str="SELECT Count(MaSach) as trang FROM `sach`
					INNER JOiN chude on sach.MaChuDe=chude.MaChuDe
					WHERE chude.TheLoai='$id'";
        	$query=$this->db->query($query_str);
			return $query->row_array();
        	
        }

		public function pagination($limit,$offset,$theloai)
		{
			

			 $query_str="SELECT * FROM sach
			 INNER JOIN chude on sach.MaChuDe=chude.MaChuDe
			 Where chude.TheLoai='$theloai' 
			 LIMIT $limit,$offset ";

            $query=$this->db->query($query_str);
			return $query->result_array();

			  
		}


	}
 ?>