<?php

##for database connection

include("../../includes/dbconn.php");

##for delete operation

if(isset($_GET['id'])){
	
	if($_GET['deleteme']=='yes') {

	$id=$_GET['id'];
	
	$q="SELECT cat_image FROM tbl_category WHERE cat_id='$id'";
		
	$data=mysql_query($q);
	
	$img=mysql_fetch_assoc($data);
	
	$imagename=$img['cat_image'];
	
	##checking for file exists or not
	if(file_exists("../../images/category/".$imagename)){
		
	  ##for deleting image
	  unlink("../../images/category/".$imagename);
	
	}
	
	
	
	$query1="SELECT * FROM tbl_category ORDER BY cat_id DESC";
										
	$data=mysql_query($query1);
	
	$query="DELETE FROM tbl_category WHERE cat_id='$id'";
	
	mysql_query($query);
	
	
	header("location:../category.php");
	
	}
}
else {
	
	header("location:../../index.php");
	
}

?>