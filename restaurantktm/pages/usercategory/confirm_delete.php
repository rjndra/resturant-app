<?php

##for database connection

include("../../includes/dbconn.php");

##for delete operation

if(isset($_GET['id'])){
	
	if($_GET['deleteme']=='yes') {

	$id=$_GET['id'];
	
	$query="DELETE FROM tbl_user_cat WHERE user_cat_id='$id'";
	
	mysql_query($query);
	
	
	header("location:../../pages/userscategory.php");
	
	}
}
else {
	
	header("location:../../index.php");
	
}

?>