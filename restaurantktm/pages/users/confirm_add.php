<?php

##for database connection

include("../../includes/dbconn.php");

## for adding item

if(isset($_POST['add'])){
	
	$user_fullname = $_POST['user_fullname'];
	
	$user_username = $_POST['user_username'];
	
	$user_password = $_POST['user_password'];
	
	$user_email = $_POST['user_email'];
	
	$user_username = $_POST['user_username'];
	
			
	##for checkbox user_status
		
		if(isset($_POST['user_status'])){
			
			$user_status="A";
			
			}
			
		else	{
			
			$user_status="I";
			
		}
			
	
	
	## for user category id
	
	$user_cat_name = $_POST['user_cat_name'];
	
	$sql="SELECT * FROM tbl_user_cat";
	$category=mysql_query($sql); 
	
	while($row=mysql_fetch_assoc($category)){
		if($user_cat_name ==  $row['user_cat_name']){
			$user_cat_id = $row['user_cat_id'];
		}
	}
			
		$query="INSERT INTO tbl_user
					VALUES (
						'',
						'$user_fullname',
						'$user_username',
						'$user_password',
						'$user_email',
						'$user_cat_id',
						'$user_status'
					)";
		
		$result= mysql_query($query);
		
		if($result)	{
			
			$message="S";
			
			}
			
		else	{

			$message="F";
		}
		
		echo $query;
		
		echo $message;
			
	header("location:../users.php");
	
	}
	
else {
	
	header("location:../../index.php");	

}
	
?>