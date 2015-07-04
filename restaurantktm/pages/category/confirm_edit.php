<?php

##for database connection

include("../../includes/dbconn.php");

##for edit operation

##for uploading data into tbl_category

if(isset($_POST['update'])){
	
	$id=$_POST['cat_id'];

	$cat_name=$_POST['cat_name'];

	$cat_description=$_POST['cat_description'];

	##for checkbox 
	  
		if(isset($_POST['cat_publish'])){
		  
			$cat_publish="Y";
		}
		else	{
			
			$cat_publish="N";
		}
		  

##for image upload

$cat_image=$_FILES['cat_image']['name'];

if(empty($cat_image)){
  
  $query="UPDATE tbl_category
  SET 
	  cat_name='$cat_name',
	  cat_description='$cat_description',
	  cat_publish='$cat_publish'
  WHERE cat_id='$id'";
  
}
  
else {
	// for category old image  delete
	$q="SELECT cat_image FROM tbl_category WHERE cat_id='$id'";
		
	$data=mysql_query($q);
	
	$img=mysql_fetch_assoc($data);
	
	$imagename1=$img['cat_image'];
	
	##checking for file exists or not
	if(file_exists("../../images/category/".$imagename1)){
		
	  ##for deleting image
	  unlink("../../images/category/".$imagename1);
	
	}
	// old image delete code ends
  
  $source=$_FILES['cat_image']['tmp_name'];
  
  $destination="../../images/category/".$cat_image;
  
  move_uploaded_file($source,$destination);
  
  $query="UPDATE tbl_category
  SET 
	  cat_name='$cat_name',
	  cat_description='$cat_description',
	  cat_image='$cat_image',
	  cat_publish='$cat_publish'
  WHERE cat_id='$id'";
  
}

echo $query;
  
  $result = mysql_query($query);
		
		if($result){
			
			$message="S";
		}
		
		else {
			
			$message="F";
		}
  
	header("location:../category.php");
	
}
else {
	
	header("location:../../index.php");
	
}

?>