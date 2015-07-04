<?php
session_start();

if(!isset($_SESSION['username'])){
	header("location:index.php");
}

##for database connection
include("includes/dbconn.php");
date_default_timezone_set("Asia/Kathmandu"); 
## for payment action
if(isset($_POST['id'])) {
	$iid = $_POST['id'];
	echo $iid;
	
	if ($_POST['action'] == "ajax_payment"){	
	  $sql="SELECT * FROM tbl_order  WHERE order_table_id = $iid ORDER BY order_id DESC";
	  $order = mysql_query($sql); 
	  $sum = 0;
	  
	  while($roworder=mysql_fetch_assoc($order)) {
		$itemId = $roworder['order_item_id'];
		$sql="SELECT * FROM tbl_items WHERE item_id = $itemId";
		$item=mysql_query($sql); 
		
		while($rowitem = mysql_fetch_assoc($item)) {
			
			$itemID = $rowitem['item_id'];
			  // each item price
			  $itemPrice = $rowitem['item_price'];
			  // item quantity 
			  $itemQty = $roworder['order_item_qty'];
			  // total item price
			  $totalPrice =$itemPrice * $itemQty;
			  $sum = $sum + $totalPrice;
			  
			  $sqlinsert="INSERT INTO tbl_payment 
						  VALUES(
							'',
							'$iid',
							'$itemId',
							'$itemPrice',
							'$itemQty',
							'$totalPrice'
						  )";	
			  mysql_query($sqlinsert);
			  $query="DELETE FROM tbl_order WHERE order_table_id='$iid'";
			  mysql_query($query);
		}	   
	  }	
	 
	  $date1 = date("Y-m-d");
	  $time1 = date("H:i:s");
	  $sqlinsert="INSERT INTO tbl_account 
				  VALUES(
					'',
					'$iid',
					'$sum',
					'$date1',
					'$time1'
				  )";	
	  $result = mysql_query($sqlinsert);
	  if($result){
			echo "Operation Successful!";
	  }
	  else {
		  echo "Something went worng please try again!";
	  }
  }
}
?>
<html>
<div id="home">
<?php
## view the page
include("views/home.tmpl.php");
?>
</div>
</html>



