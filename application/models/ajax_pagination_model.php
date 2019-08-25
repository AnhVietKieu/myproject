<?php
      class ajax_pagination_model extends CI_Model
    {
      public function __construct()
      {
        $this->load->database();
      }
      function count_all()
     {
      $query = $this->db->get("sach");
      return $query->num_rows();
     }

     function fetch_details($limit, $start)
     {
          $output = '';
          $this->db->select("*");
          $this->db->from("sach");
          $this->db->limit($limit, $start);

          $query = $this->db->get();
          $output .= '';
          $book=$query->result();                    
          return $output;
         }
}

 ?>