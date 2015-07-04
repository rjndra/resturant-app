<?php

##for database connection

include("../../includes/dbconn.php");

##for edit operation

##for uploading data into tbl_items

if(isset($_POST['update'])){
	
	$id=$_POST['item_id'];

	$item_name=$_POST['item_name'];

	$item_description=$_POST['item_description'];

	##for checkbox 
	  
		if(isset($_POST['item_publish'])){
		  
			$item_publish="Y";
		}
		else	{
			
			$item_publish="N";
		}
		  
	##for checkbox item_featured
			
		if(isset($_POST['item_featured'])){
				
			$item_featured="Y";
		}
		else{
		
			$item_featured="N";
		}

	$item_price=$_POST['item_price'];	
		
	## for category id
	
	$cat_name = $_POST['category_name'];
	
	$sql2 = "SELECT * FROM tbl_category";

	$result2=mysql_query($sql2); 
	
	while($data2=mysql_fetch_assoc($result2)){

		if($cat_name ==  $data2['cat_name']){

			$item_cat_id = $data2['cat_id'];
		
		}
	}

##for image upload

$item_image=$_FILES['item_image']['name'];

if(empty($item_image)){
  
  $query="UPDATE tbl_items 
  SET 
	  item_name='$item_name',
	  item_description='$item_description',
	  item_price='$item_price',
	  item_cat_id='$item_cat_id',
	  item_publish='$item_publish',
	  item_featured='$item_featured'
  WHERE item_id='$id'";
  
}
  
else {
	
	// for old image delete
	
	$q="SELECT item_image FROM tbl_items WHERE item_id='$id'";
		
	$data=mysql_query($q);
	
	$img=mysql_fetch_assoc($data);
	
	$imagename1=$img['item_image'];
	
	##checking for file exists or not
	if(file_exists("../../images/items/".$imagename1)){
		  
	  ##for deleting image
	  unlink("../../images/items/".$imagename1);
	
	}
	
	// old image delete code ends.
  
  $source=$_FILES['item_image']['tmp_name'];
  
  $destination="../../images/items/".$item_image;
  
  move_uploaded_file($source,$destination);
  
  $query="UPDATE tbl_items 
  SET 
	  item_name='$item_name',
	  item_description='$item_description',
	  item_image='$item_image',
	  item_price='$item_price',
	  item_cat_id='$item_cat_id',
	  item_publish='$item_publish',
	  item_featured='$item_featured'
  WHERE item_id='$id'";
  
}

echo $query;
  
  $result = mysql_query($query);
		
		if($result){
			
			$message="S";
		}
		
		else {
			
			$message="F";
		}
  
	header("location:../item.php");
	
}
else {
	
	header("location:../../index.php");
	
}

?>