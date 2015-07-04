<?php
session_start();

 if(!isset($_SESSION['username'])){
	
	header("location:index.php");
}


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

        <title>Resturant Kathamdnu | User List</title>

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

            <?php include "pages/users/view_user.php"; ?>
			
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
 
	$("[id^=userid_]").click(function() {
	
		var currentId = $(this).attr('id');
		var userId = currentId.replace(/[^0-9]/g, '');
	
		<?php
		
			$query="SELECT * FROM tbl_user ORDER BY user_id DESC";
										
			$data=mysql_query($query);
									
			while($row=mysql_fetch_assoc($data)){ ?>
										
				if(<?php echo $row['user_id'] ;?> == userId) { 
					$("#edit_user_id").val("<?php echo $row['user_id']; ?>");
					$("#edit_user_fullname").val("<?php echo $row['user_fullname']; ?>");
					$("#edit_user_username").val("<?php echo $row['user_username']; ?>");
					$("#edit_user_password").val("<?php echo $row['user_password']; ?>");
					$("#edit_user_email").val("<?php echo $row['user_email']; ?>");
					
					<?php $sql3="SELECT * FROM tbl_user_cat";
							$result3=mysql_query($sql3); 
							while($data3=mysql_fetch_assoc($result3)) {	if ($data3['user_cat_id']==$row['user_cat_id']) { ?>
					$("#edit_user_cat").val("<?php echo $data3['user_cat_name']; ?>").attr("selected",true);
					
					<?php if ($row['user_status'] == "A") {  ?>
						$("#edit_user_status").prop('checked', true);
					<?php } ?>
					
					<?php } }	?>
				}
		<?php }	?>	
	});

</script>

</body>

</html>
