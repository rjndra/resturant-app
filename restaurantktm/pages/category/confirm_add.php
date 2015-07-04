<?php

##for database connection

include("../../includes/dbconn.php");

## for adding item

if(isset($_POST['add'])){
	
	$cat_name=$_POST['cat_name'];
	
	$cat_description=$_POST['cat_description'];
	
	##for image upload
	
	$image=$_FILES['cat_image'];
	
	print_r($image);
	
	$cat_image=$_FILES['cat_image']['name'];
	
	if(empty($cat_image)){
		
		$cat_image="";
		}
		
	else{
		
		$source=$_FILES['cat_image']['tmp_name'];
		
		$destination="../../images/category/".$item_image;
		
		move_uploaded_file($source,$destination);
		
		}
		
	##for checkbox item_publish
		
		if(isset($_POST['cat_publish'])){
			
			$cat_publish="Y";
			
			}
			
		else	{
			
			$cat_publish="N";
			
		}
		
		$query="INSERT INTO tbl_category
					VALUES(
						'',
						'$cat_name',
						'$cat_description',
						'$cat_image',
						'$cat_publish'
					)";
		
		$result=mysql_query($query);
		
		if($result)	{
			
			$message="S";
			
			}
			
		else	{

			$message="F";
			
			}
	header("location:../category.php");
	
	}
	
else {
	
	header("location:../../index.php");	

}
	
?>