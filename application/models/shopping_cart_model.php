<?php
class Shopping_cart_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

 	function find_product($id)
 	{
  		$this->db->where('MaSach',$id);
  		$query = $this->db->get("sach");
 		return $query->row_array();
 	}
 	function find_all()
 	{
  		
  		$query = $this->db->get("sach");
 		return $query->result_array();
 	}
}
