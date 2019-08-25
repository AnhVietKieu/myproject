<?php 
	class home_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function gets_menu($id)
		{
			$this->db->where('TheLoai',$id);
			$query=$this->db->get('chude');
			return $query->result_array();
		}

		public function gets_products($limit,$offset)
		{
			
			$query_str="SELECT sach.MaSach, sach.TenSach,sach.GiaBia, sach.MoTa, sach.AnhBia,sach.NamXuatBan,sach.NgayVaoKho, sach.SoLuong,sach.MaNXB,sach.MaChuDe,sach.MaTacGia,sach.GhiChu,sach.TinhTrang,sach.MaLink from sach
			 LEFT JOIN chude on sach.MaChuDe=chude.MaChuDe
			 Where chude.TheLoai='1' 
			 LIMIT $limit,$offset ";


            $query=$this->db->query($query_str);
			return $query->result_array();

		}
		public function gets_products_story($limit,$offset)
		{
			
			$query_str="SELECT sach.MaSach, sach.TenSach,sach.GiaBia, sach.MoTa, sach.AnhBia,sach.NamXuatBan,sach.NgayVaoKho, sach.SoLuong,sach.MaNXB,sach.MaChuDe,sach.MaTacGia,sach.GhiChu,sach.TinhTrang,sach.MaLink from sach
			 LEFT JOIN chude on sach.MaChuDe=chude.MaChuDe
			 Where chude.TheLoai='2' 
			 LIMIT $limit,$offset ";
            $query=$this->db->query($query_str);
			return $query->result_array();

		}

		public function login($username,$password)
		{
			$this->db->where('TaiKhoan',$username);
			$this->db->where('MatKhau',$password);
			$query=$this->db->get('taikhoan');
			if($query->num_rows() == 1)
			{
                 return $query->row_array();
			}
			else
			{
				return false;
			}

		}

		public function check_username_exists($username)
		{
          
          $query=$this->db->get_where('taikhoan', array('TaiKhoan' => $username));

          if(empty($query->row_array()))
          {
          	return true;

          }
          else
          {
          	return false;
          }

		}

		public function add()
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
			'MaQuyenHan' => 'User'
		    );

            return $this->db->insert('taikhoan',$data);

		}


		public function utf8convert($str) {

		                if(!$str) return false;

		                $utf8 = array(

		            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

		            'd'=>'đ|Đ',

		            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

		            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',

		            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

		            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

		            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',

		                                                );

		                foreach($utf8 as $ascii=>$uni)
		                 $str = preg_replace("/($uni)/i",$ascii,$str);

		return $str;

		}

		public function utf8tourl($text){
			$text = $this->utf8convert($text);
	        $text = str_replace( "ß", "ss", $text);
	        $text = str_replace( "%", "", $text);
	        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
	        $text = str_replace(array('%20', ' '), '-', $text);
	        $text = str_replace("----","-",$text);
	        $text = str_replace("---","-",$text);
	        $text = str_replace("--","-",$text);
			return $text;
		}
		public function catdau($text){	
	        $text = str_replace( "ß", "ss", $text);
	        $text = str_replace( "%", "", $text);
	        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
	        $text = str_replace(array('%20', ' '), '-', $text);
	        $text = str_replace(array('20', ' '), '-', $text);
	        $text = str_replace("----","-",$text);
	        $text = str_replace("---","-",$text);
	        $text = str_replace("--","-",$text);
	        $text = str_replace("-"," ",$text);
	        $text = str_replace(".html","",$text);
	        $text = $this->utf8convert($text);
			return $text;
		}
		
		public function search($search)
		{
			
			$query_str="SELECT * FROM sach WHERE TenSach  like '%".$search."%'  ";
			$query=$this->db->query($query_str);

			return $query->result_array();
		}



	}
 ?>