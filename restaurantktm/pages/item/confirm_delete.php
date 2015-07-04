<?php

##for database connection

include("../../includes/dbconn.php");

##for delete operation

if(isset($_GET['id'])){
	
	if($_GET['deleteme']=='yes') {

	$id=$_GET['id'];
	
	$q="SELECT item_image FROM tbl_items WHERE item_id='$id'";
		
	$data=mysql_query($q);
	
	$img=mysql_fetch_assoc($data);
	
	$imagename=$img['item_image'];
	
	##checking for file exists or not
	if(file_exists("../../images/items/".$imagename)){
		
	##for deleting image
	unlink("../../images/items/".$imagename);
	
	}
	
	
	
	$query1="SELECT * FROM tbl_items ORDER BY item_ID DESC";
										
	$data=mysql_query($query1);
	
	print_r($data);
	
	$query="DELETE FROM tbl_items WHERE item_id='$id'";
	
	mysql_query($query);
	
	
	header("location:../item.php");
	
	}
}
else {
	
	header("location:../../index.php");
	
}

?>