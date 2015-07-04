<?php

##for database connection

include("../../includes/dbconn.php");

## for adding item

if(isset($_POST['add'])){
	
	$item_name=$_POST['item_name'];
	
	$item_description=$_POST['item_description'];
	
	##for image upload
	
	$image=$_FILES['item_image'];
	
	print_r($image);
	
	$item_image=$_FILES['item_image']['name'];
	
	if(empty($item_image)){
		
		$item_image="";
		}
		
	else{
		
		$source=$_FILES['item_image']['tmp_name'];
		
		$destination="../../images/items/".$item_image;
		
		move_uploaded_file($source,$destination);
		
		}
		
	##for checkbox item_publish
		
		if(isset($_POST['item_publish'])){
			
			$item_publish="Y";
			
			}
			
		else	{
			
			$item_publish="N";
			
		}
			
	$item_price=$_POST['item_price'];
	
	## for category id
	
	$cat_name = $_POST['category_name'];
	
	$sql="SELECT * FROM tbl_category";
	$category=mysql_query($sql); 
	
	while($row=mysql_fetch_assoc($category)){
		if($cat_name ==  $row['cat_name']){
			$item_cat_id = $row['cat_id'];
		}
	}
	
			
	##for checkbox item_featured
		
		if(isset($_POST['item_featured'])){
			
			$item_featured="Y";
			}
		else{
			$item_featured="N";
			}
				
		echo $item_cat_id;
		
		$query="INSERT INTO tbl_items 
					VALUES(
						'',
						'$item_name',
						'$item_description',
						'$item_image',
						'$item_price',
						'$item_cat_id',
						'',
						'$item_publish',
						'$item_featured'
					)";
		
		$result=mysql_query($query);
		
		if($result)	{
			
			$message="S";
			
			}
			
		else	{

			$message="F";
			
			}
	header("location:../item.php");
	
	}
	
else {
	
	header("location:../../index.php");	

}
	
?>