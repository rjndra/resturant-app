<?php

##for database connection

include("../../includes/dbconn.php");

##for delete operation

if(isset($_GET['id'])){
	
	if($_GET['deleteme']=='yes') {

	$id=$_GET['id'];
	
	$query="DELETE FROM tbl_user WHERE user_id='$id'";
	
	mysql_query($query);
	
	
	header("location:../users.php");
	
	}
}
else {
	
	header("location:../../index.php");
	
}

?>