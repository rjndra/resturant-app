<?php

##for database connection

include("../../includes/dbconn.php");

##for edit operation

##for uploading data into tbl_items

if(isset($_POST['update'])){
	
	$user_id=$_POST['user_id'];

	$user_fullname=$_POST['user_fullname'];

	$user_username =$_POST['user_username'];

	$user_password =$_POST['user_password'];
	
	$user_email =$_POST['user_email'];
	
	##for checkbox 
	  
		if(isset($_POST['user_status'])){
		  
			$user_status = "A";
		}
		else	{
			
			$user_status = "I";
		}

		
	## for category id
	
	$user_cat_name = $_POST['user_cat_name'];
	
	$sql2 = "SELECT * FROM tbl_user_cat";

	$result2=mysql_query($sql2); 
	
	while($data2=mysql_fetch_assoc($result2)){

		if($user_cat_name ==  $data2['user_cat_name']){

			$user_cat_id = $data2['user_cat_id'];
		
		}
	}


  
  $query="UPDATE tbl_user 
  SET 
	  user_fullname='$user_fullname',
	  user_username='$user_username',
	  user_password='$user_password',
	  user_email='$user_email',
	  user_cat_id='$user_cat_id',
	  user_status='$user_status'
  WHERE user_id='$user_id'";
  
  echo $query;
  
  $result = mysql_query($query);
		
		if($result){
			
			$message="S";
		}
		
		else {
			
			$message="F";
		}
		echo $message;
  
	header("location:../users.php");
	
}
else {
	
	header("location:../../index.php");
	
}

?>