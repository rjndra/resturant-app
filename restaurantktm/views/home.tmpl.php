
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Order List | Resturant App</title>
  <?php include "includes/css.php"; ?>
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	  <?php include "includes/topmenu.php"; ?>
	  <?php include "includes/sidemenu.php"; ?>
    </nav>
  </div>	
  <!-- Navigation -->
<div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class=""></h1>
      </div>
    <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Click Tables number to view corresponding Orders
          </div>
          <!-- /.panel-heading -->
        
          <div id="page-wrappers">
            <div class="col-lg-12">
              <h1 class=""></h1>
            </div>
            
            <div>
              <p align="justify" style="line-height:1.5">
				<?php 
				  $totaltables = 10; 
				  for ( $i=1; $i<=$totaltables; $i++) { 
				?>
                    <button type="button" id="button_<?= $i; ?>" class="btn btn-info"><?php echo $i; ?></button>
                <?php } ?>		
              </p>
            
            
              <div class="row placeholders">
                <div id="content"></div>
				  <?php 
                    for ( $i=1; $i<=$totaltables; $i++) { 
                      $query1 = "SELECT * FROM tbl_order  WHERE order_table_id = $i ORDER BY order_id DESC" ;																		
                      $data=mysql_query($query1);
                      
                      $sn=1;
                      $j = 0;
                      while($row=mysql_fetch_assoc($data)) {
                        $j = $j + 1;
                      }
                      if ( $j <= 0 ){ 
                  ?> 
                
                  <div id = "tableinfo_<?= $i; ?>" class="col-xs-12 col-sm-12 placeholder hidden">
                    <h2 class="page-header">Service to Customer</h2>
                    <p> Table has no customers. </p>
                  </div>
                  
				  <?php } else {   ?>
				
				
                  <div id = "tableinfo_<?= $i; ?>" class="col-xs-12 col-sm-12 placeholder hidden">
                    <h2 class="page-header">Service to Customer</h2>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <button type="button" class="btn btn-default"><span class="badge">order</span></button>
                        &nbsp;&nbsp;
                        <b>Table No: <?= $i; ?></b>
                        <button id="newOrder_<?= $i; ?>" type="button" class="btn btn-danger pull-right">Receipt</button>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover text-center">
                            <thead>
                              <td>S.N.</td>
                              <td>Food</td>
                              <td>Quantity</td>
                              <td>Price</td>
                              <td>Delivery</td>
                            </thead>
                            
                            <tbody>
                            
							  <?php 
								$query1 = "SELECT * FROM tbl_order  WHERE order_table_id = $i ORDER BY order_id DESC" ;																		
								$data=mysql_query($query1);
								$sn= 1; 
								$sum= 0;
								
								
								while($roworder=mysql_fetch_assoc($data)) {
								  $itemId = $roworder['order_item_id'];
								  $sql="SELECT * FROM tbl_items WHERE item_id = $itemId";
								  $item=mysql_query($sql); 
								  
								  while($rowitem = mysql_fetch_assoc($item)) {
									$price = $rowitem['item_price']*$roworder['order_item_qty'];
									$sum = $sum + $price;
                              ?>
                              <tr>
                                <td><?= $sn++;?></td>
                                <td><?= $rowitem['item_name']; ?></td>
                                <td><?= $roworder['order_item_qty'];?></td>
                                <td><?= $price; ?></td>
                                <td>
                                <button type="button" class="btn btn-info pull-right btn-circle"><i class="fa fa-bell-o"></i></button>
                                <button id="task_<?= $i; ?>" type="button" class="btn btn-primary btn-xs pull-right hidden">Cooking</button>
                                <button type="button" class="btn btn-info btn-circle pull-right hidden"><i class="fa fa-check"></i></button>
                                </td>
                              </tr> 
                              <?php  } } ?>
                              
                              <tr>
                                <td></td>
                                <td></td>
                                
                                <td>Total</td>
                                <td><?= $sum; ?></td>
                                <td></td>
                              </tr>
                            
                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.panel-body -->
                    
                      <div class="panel-heading">
                        <button type="button" id="print_<?= $i; ?>" class="btn btn-success">Print</button>
                        <button type="button" id="payment_<?= $i; ?>" class="btn btn-success pull-right">Payment</button>
                      </div>
                    </div>
                    <!-- /.panel -->
                  </div>
                  
                  <div id = "reviewinfo_<?= $i; ?>" class="col-xs-12 col-sm-12 placeholder hidden">
                  <h2 class="page-header">Service to Customer</h2>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <button type="button" class="btn btn-default"><span class="badge">order</span></button>
                      &nbsp;&nbsp;
                      <b>Table No: <?= $i; ?></b>
                      <button id="reviewPayment_<?= $i; ?>" type="button" class="btn btn-danger pull-right">Review</button>
                    </div>
                    <!-- /.panel-heading -->
                    <div  id = "printme_<?= $i; ?>" class="panel-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover text-center">
                          <thead>
                            <td>S.N.</td>
                            <td>Food</td>
                            <td>Quantity</td>
                            <td>Price</td>
                          </thead>
                          
                          <tbody>
                          
                            <?php 
                              $query1 = "SELECT * FROM tbl_order  WHERE order_table_id = $i ORDER BY order_id DESC" ;																		
                              $data=mysql_query($query1);
                              $sn= 1; 
                              $sum1= 0;
                              
                              
                              while($roworder=mysql_fetch_assoc($data)) {
                                $itemId = $roworder['order_item_id'];
                                $sql="SELECT * FROM tbl_items WHERE item_id = $itemId";
                                $item=mysql_query($sql); 
                                
                                while($rowitem = mysql_fetch_assoc($item)) {
                                  $price = $rowitem['item_price']*$roworder['order_item_qty'];
                                  $sum1 = $sum1 + $price;
                            ?>
                            <tr>
                              <td><?= $sn++;?></td>
                              <td><?= $rowitem['item_name']; ?></td>
                              <td><?= $roworder['order_item_qty'];?></td>
                              <td><?= $price; ?></td>
                              
                            </tr> 
                            <?php  } } ?>
                            
                            <tr>
                              <td></td>
                              <td></td>
                              
                              <td>Total</td>
                              <td><?= $sum1; ?></td>
                            </tr>
                          
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                  
                    <div class="panel-heading">
                      <button type="button" id="cancelpayment_<?= $i; ?>" class="btn btn-success">Cancel Payment</button>
                      <button type="button" id="confirmpayment_<?= $i; ?>" class="btn btn-success pull-right">Pay</button>
                    </div>
                  </div>
                  <!-- /.panel -->
                </div>
                  
                  <?php }  } ?>
                 <div id = "paidinfo" class="col-xs-12 col-sm-12 placeholder hidden">
                    <h2 class="page-header">Payment Info. </h2>
                    <p> Payment has done Sucessfully </p>
                  </div>
                  

              
              </div>
            </div>
          </div>
        </div>
      
      </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
  </div>
 

<!-- jQuery -->
<?php include "includes/js.php"; ?>
<script src="dist/js/home.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>


for (var i=1; i<=totaltables; i++) {
	var buttonid = '#button_' + i;
	<?php 
	  $sql="SELECT * FROM tbl_order";
	  $order = mysql_query($sql); 
  
	  while($rowitem = mysql_fetch_assoc($order)){ ?>
		if( <?= $rowitem['order_table_id'] ?> == i  ){
				$(buttonid).removeClass('btn-info').addClass('btn-danger').blink({ 
				  delay: 500 - i * 7 
				});
		
		}
	 <?php } ?>
}

</script>
</body>

</html>

