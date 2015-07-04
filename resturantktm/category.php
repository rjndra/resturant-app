<?php
session_start();

 if(!isset($_SESSION['username'])){
	
	header("location:index.php");
}

##for menu active	
$active="home";

##for database connection

include("includes/dbconn.php");

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Category List</title>

        <?php include "includes/css.php"; ?>

    </head>

    <body>

        <div id="wrapper">
		
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			
				<?php include "includes/topmenu.php"; ?>
				<?php include "includes/sidemenu.php"; ?>
				
			</nav>
		</div>
		<!-- Navigation -->
		
		<div id="page-wrapper">

            <?php include "pages/category/viewcategory.php"; ?>
			
		</div>
			
    <!-- /#page-wrapper -->

    </div>
<!-- /#wrapper -->

<?php include "includes/js.php"; ?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
 
	$("[id^=catid_]").click(function() {
	
		var currentId = $(this).attr('id');
		var catId = currentId.replace(/[^0-9]/g, '');
	
		<?php
			$query="SELECT * FROM tbl_category ORDER BY cat_id DESC";
										
			$data=mysql_query($query);
									
			while($row=mysql_fetch_assoc($data)){ ?>
										
				if(<?php echo $row['cat_id'] ;?> == catId) { 
					$("#edit_cat_id").val("<?php echo $row['cat_id']; ?>");
					$("#edit_cat_name").val("<?php echo $row['cat_name']; ?>");
					$("#edit_cat_description").val("<?=$row['cat_description']; ?>");
					// $("#edit_cat_image").img.src("../uploads/category/<?php echo $row['cat_image']; ?>");	
					<?php if ($row['cat_publish'] == "Y") {  ?>
						$("#edit_cat_publish").prop('checked', true);
					<?php } ?>
				}
		<?php }	?>
			
	});

</script>

</body>

</html>
