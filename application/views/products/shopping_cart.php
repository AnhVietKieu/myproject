<?php
if($this->session->flashdata('user_fail')){
?>
<div class="alert alert-warning alert-dismissable" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong><?php echo $this->session->flashdata('user_fail'); ?></strong>
</div>
<?php
}
?>

<div class="container">    
<div class="row">
<div class="col-sm-9">
<div class="panel panel-success">
    <div class="panel-heading"><h2>GIỎ HÀNG</h2></div>
    <div class="panel-body">

<?php if($this->session->userdata('product')){?>
<h1 style="text-align: center; ">Your Cart</h1>
    <table border="1" width="700px" height="10px" style="text-align: center; ">
        <tr >
            <th style="height: 10px;">Index</th>
            <th style="height: 10px;">Name</th>
            <th style="height: 10px;">Quantity</th>
            <th style="height: 10px;">Price</th>
            <th style="height: 10px;">Amount</th>
            <th style="height: 10px;">Action</th>
            <th style="height: 10px;">Action</th>
             <th style="height: 10px;">Action</th>
        </tr>
        <?php $count = 1;

        //var_dump($list);
        foreach ($list as $p): ?>

        <tr>
            <?php $this->session->set_userdata('items', $this->cart->total_items());?>

              <?php $this->session->set_userdata('qty',$p['qty']);?>
            <?php $this->session->set_userdata($p['rowid'],$p['qty']);?>
            <td><?php echo $count++; ?></td>
            <td><?php echo $p['name']; ?></td>
            <td> <?php echo $p['qty'];?></td>

            <td><?php echo number_format($p['price']); ?></td>
            <td><?php echo number_format($p['subtotal']); ?></td>
            <td><a class="btn btn-success" style="margin-top: 5px; margin-bottom: 5px;" href="<?php echo base_url();?>delete/<?php echo $p['rowid'];?>">Delete</a></td>
            <td><a class="btn btn-success" style="margin-top: 5px; margin-bottom: 5px;" href="<?php echo base_url();?>update_tang/<?php echo $p['rowid'];?>">Tăng</a></td>
             <td><a class="btn btn-success" style="margin-top: 5px; margin-bottom: 5px;" href="<?php echo base_url();?>update_giam/<?php echo $p['rowid'];?>">Giảm  </a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <!--
    <div style="margin-top: 10px;">
        <button class="btn btn-success" >
            <a style="color: white;" href="<?php //echo base_url();?>delete">Clear_all</a>
        </button>
    </div>
-->


    <div style="margin-left: 300px;">
        <h2>Tổng giá: <?php echo $this->cart->format_number($this->cart->total(),0,",",","); ?> Đồng</h2>
    </div>

    <?php }
    else
    {
         echo "Không có sản phẩm !";
    }

    ?>

    </div>
</div>
</div>
</div>
</div>