<?php

	class chude_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		function utf8convert($str) {

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

		function utf8tourl($text){
	        $text = strtolower(utf8convert($text));
	        $text = str_replace( "ß", "ss", $text);
	        $text = str_replace( "%", "", $text);
	        $text = preg_replace("/[^_a-zA-Z0-9 -] /", "",$text);
	        $text = str_replace(array('%20', ' '), '-', $text);
	        $text = str_replace("----","-",$text);
	        $text = str_replace("---","-",$text);
	        $text = str_replace("--","-",$text);
			return $text.'.html';
		}

		public function gets_all()
		{
			$this->db->order_by('MaChuDe','DESC');
			$query=$this->db->get('chude');
    	    return $query->result_array();

		}
        
        public function gets_row($id)
        {
        	$this->db->where('MaChuDe',$id);
        	$query=$this->db->get('chude');
            return $query->row_array();
        }

        public function delete_chude($id)
        {
        	$query_str="SELECT chitietdonhang.MaSach FROM chude INNER JOIN sach ON chude.MaChuDe=sach.MaChuDe INNER JOIN chitietdonhang ON sach.MaSach=chitietdonhang.MaSach
				WHERE chude.MaChuDe= $id LIMIT 0,1";
			$query=$this->db->query($query_str);
			$data=$query->row_array();

			$this->db->where('MaSach',$data['MaSach']);
			$this->db->delete('chitietdonhang');
			$this->db->where('MaChuDe',$id);
			$this->db->delete('sach');
			$this->db->where('MaChuDe',$id);
			$this->db->delete('chude');
        }

		public function sets_new()
		{
            
		    $data = array (
			'TenChuDe'=>$this->input->post('tenchude'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TheLoai'=>$this->input->post('theloai'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );

            return $this->db->insert('chude',$data);
		}

		public function updates_new()
		{
            $data = array (
			'TenChuDe'=>$this->input->post('tenchude'),
			'GhiChu'=>$this->input->post('ghichu'),
			'TheLoai'=>$this->input->post('theloai'),
			'TinhTrang'=>$this->input->post('tinhtrang')
		    );
		    
            $this->db->where('MaChuDe',$this->input->post('machude'));
            return $this->db->update('chude',$data);

		}
		
	} 
 ?>