<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

  class Shopping_cart extends CI_Controller 
  {
    public function __construct()
    {

      parent::__construct();
      
     parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->model('product_model');
		$this->load->model('shopping_cart_model');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->load->library('cart');
		$this->load->helper('form');
		$this->load->library('form_validation');

    }

    public function index()
	{
		$data['menubooks']=$this->home_model->gets_menu('1');
		$data['menustorys']=$this->home_model->gets_menu('2');
    $data['list'] = $this->cart->contents();
		
		
		$this->load->view('template/header',$data);
		$this->load->view('products/shopping_cart', $data);
		$this->load->view('template/footer');
	}

    public function insert()
    {

      $id=$this->session->userdata('product');

      $product=$this->shopping_cart_model->find_product($id);
              
      $data = array(
        'id'      => $product['MaSach'] ,
        'qty'     => 1,
        'price'   => $product['GiaBia'],
        'name'    => $product['TenSach'],
      );


        if ($this->cart->insert($data)) 
        {
            
            $data['list'] = $this->cart->contents();
           

  			$data['menubooks']=$this->home_model->gets_menu('1');
  			$data['menustorys']=$this->home_model->gets_menu('2');

         
			  $this->load->view('template/header',$data);
        $this->load->view('products/shopping_cart', $data);
       	$this->load->view('template/footer');

        } 
        else
        {
                echo "Thêm sản phẩm thất bại";
          
        }
        
   }

 public function update_tang($rowid)
    {
     $qty=$this->session->userdata("qty");

      $sanpham=$this->shopping_cart_model->find_all();
     
      foreach ($sanpham as $key ) {
        if(md5($key['MaSach'])==$rowid)
        {
          $id=$key['MaSach'];
        }
      }

      $products=$this->shopping_cart_model->find_product($id);

      if($products['SoLuong']<=$qty)
      {
        $this->session->set_flashdata('user_fail','Không thể thêm đươc sản phẩm:<span style="color:red;"> '.$products['TenSach'].'!</span>');
        
        redirect('giohang.html');
      }
      else
      {
         if($products['SoLuong']>$this->session->userdata[$rowid])
         {
              $data = array(
              'rowid' => $rowid,
              'qty'   => ($qty+1)
            );

              if($this->cart->update($data))
              {
                 redirect('giohang.html');
              }
        }

      }  


    }

     public function update_giam($rowid)
    {
     $qty=$this->session->userdata("qty");
     if(($qty-1)>0)
    {
      $data = array(
        'rowid' => $rowid,
        'qty'   => ($qty-1)
      );

       if($this->cart->update($data))
      {
        redirect('giohang.html');
      }
    }
    else
    {
       redirect('giohang.html');
    }

    }

    public function delete($rowid)
    {
      //$this->session->set_userdata("id_xoa",$rowid);
      $data = array(
        'rowid' => $rowid,
        'qty'   => 0
      );

      
          if($this->cart->update($data))
          {

            redirect('giohang.html');
         }        
    }

    public function deleteAll()
    {
      $this->cart->destroy();
      $this->session->unset_userdata('items');
      redirect('giohang.html');
    }
} 
 ?>