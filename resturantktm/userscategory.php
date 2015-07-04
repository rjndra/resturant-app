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

        <title>Item List</title>

        <?php include "includes/css.php"; ?>
    </head>

    <body>

        <div id="wrapper">
		
			<nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
			
				<?php include "includes/topmenu.php"; ?>
				<?php include "includes/sidemenu.php"; ?>
				
			</nav>
		</div>
		<!-- Navigation -->
		
		<div id="page-wrapper">

            <?php include "pages/usercategory/view_user_category.php"; ?>
			
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
 
	$("[id^=usercatid_]").click(function() {
	
		var currentId = $(this).attr('id');
		var usercatId = currentId.replace(/[^0-9]/g, '');
	
		<?php
		
			$query="SELECT * FROM tbl_user_cat ORDER BY user_cat_id DESC";
										
			$data=mysql_query($query);
									
			while($row=mysql_fetch_assoc($data)){ ?>
										
				if(<?php echo $row['user_cat_id'] ;?> == usercatId) { 
					$("#edit_user_cat_id").val("<?php echo $row['user_cat_id']; ?>");
					$("#edit_user_cat_type").val("<?php echo $row['user_cat_type']; ?>");
					$("#edit_user_cat_name").val("<?php echo $row['user_cat_name']; ?>");
					
					
				}
		<?php }	?>
			
	});

</script>

</body>

</html>
