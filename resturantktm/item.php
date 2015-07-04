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

        <title>Item List</title>

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

            <?php include "pages/item/viewitem.php"; ?>
			
		</div>
			
    <!-- /#page-wrapper -->

    </div>
<!-- /#wrapper -->

<?php include "includes/js.php"; ?>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#viewitems').DataTable({
            responsive: true
        });
    });
</script>
<script>
 
	$("[id^=itemid_]").click(function() {
	
		var currentId = $(this).attr('id');
		var itemId = currentId.replace(/[^0-9]/g, '');
		
		<?php
		
			$query="SELECT * FROM tbl_items ORDER BY item_id DESC";
										
			$data=mysql_query($query);
									
			while($row=mysql_fetch_assoc($data)){ ?>
										
				if(<?php echo $row['item_id'] ;?> == itemId) { 
					$("#edit_item_id").val("<?php echo $row['item_id']; ?>");
					$("#edit_item_name").val("<?php echo $row['item_name']; ?>");
					$("#edit_item_description").val("<?php echo $row['item_description']; ?>");
					$("#edit_item_price").val("<?php echo $row['item_price']; ?>");
					// $("#edit_item_image").img.src("../../uploads/items/<?php echo $row['item_image']; ?>");
					
					<?php $sql3="SELECT * FROM tbl_category";
							$result3=mysql_query($sql3); 
							while($data3=mysql_fetch_assoc($result3)) {	if ($data3['cat_id']==$row['item_cat_id']) { ?>
					$("#edit_item_category").val("<?php echo $data3['cat_name']; ?>").attr("selected",true);
					<?php } }	?>
					
					 <?php if ($row['item_featured'] == "Y") {  ?>
						$("#edit_item_featured").prop('checked', true);
					<?php } ?>
					<?php if ($row['item_publish'] == "Y") {  ?>
						$("#edit_item_publish").prop('checked', true);
					<?php } ?>
				}
		<?php }	?>
			
	});

</script>

</body>

</html>
