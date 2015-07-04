<?php

##for database connection

include("../../includes/dbconn.php");

## for adding item

if(isset($_POST['add'])){
	
	$user_cat_type=$_POST['user_cat_type'];
	
	$user_cat_name=$_POST['add_user_cat_name'];
	
		$query="INSERT INTO tbl_user_cat
					VALUES(
						'',
						'$user_cat_type',
						'$user_cat_name'
					)";
		
		$result=mysql_query($query);
		
		if($result)	{
			
			$message="S";
			
			}
			
		else	{

			$message="F";
			
			}
	header("location:../../pages/userscategory.php");
	
	}
	
else {
	
	header("location:../../index.php");	

}
	
?>