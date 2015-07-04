<?php

##for database connection

include("../../includes/dbconn.php");

##for edit operation

##for uploading data into tbl_category

if(isset($_POST['update'])){
	
	$id=$_POST['user_cat_id'];

	$cat_name=$_POST['user_cat_name'];

	$cat_type=$_POST['user_cat_type'];

	
  
  $query="UPDATE tbl_user_cat
		  SET 
			  user_cat_type='$cat_type',
			  user_cat_name='$cat_name'
		  WHERE user_cat_id='$id'";
		  
  
  $result = mysql_query($query);
		
		if($result){
			
			$message="S";
		}
		
		else {
			
			$message="F";
		}
  
	header("location:../../pages/userscategory.php");
	
}
else {
	
	header("location:../../index.php");
	
}

?>