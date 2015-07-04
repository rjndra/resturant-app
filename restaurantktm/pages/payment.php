<?php 

include "../includes/database.php";
## for payment action
if(isset($_POST['id'])) {
	header("location:item.php");
	if ($_POST['action'] == "ajax_payment"){
	  $id = $_POST['id'];
	 	
	  $sql="SELECT * FROM tbl_order WHERE order_table_id = $id ORDER BY order_id DESC";
	  $order = mysql_query($sql); 
	  while( $roworder = mysql_fetch_assoc($order)){ 

		$item_id = $roworder['order_item_id'];
		$sql="SELECT * FROM tbl_items  WHERE item_id = $item_id";
		$item=mysql_query($sql); 
		while( $rowitem = mysql_fetch_assoc($order)){ 
			  $paid_item_name = $rowitem['item_name'];
			  // each item price
			  $paid_item_price = $rowitem['item_price'];
			  // item quantity 
			  $paid_item_qty = $roworder['order_item_qty'];
			  // total item price
			  $paid_total_price =$paid_item_price * $paid_item_qty;
			  $sql="INSERT INTO tbl_payment 
					VALUES(
					  '',
					  '$paid_item_name',
					  '$paid_item_price',
					  '$paid_item_qty',
					  '$paid_total_price'
					)";
		
					
			  $result = mysql_query($sql);
		}
			  echo $result;
		
			  if($result){
				  echo "Operation Successful!";
			  }
			  else {
				  echo "Something went worng please try again!";
			  } 
			}	
	} 
}

