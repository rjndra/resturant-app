<?php
session_start();

 if(!isset($_SESSION['username'])){
	
	header("location:index.php");
}

##for menu active	
$active="home";

##for database connection

include("../includes/dbconn.php");

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cook | Resturant App</title>

        <!-- Bootstrap Core CSS -->
        <link href="../resources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- My Core CSS -->
        <link href="../dist/css/mycss.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../dist/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../dist/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../dist/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>

        <div id="wrapper">

				<?php include "../includes/topmenu.php"; ?>
			
				<?php include "../includes/sidemenu.php"; ?>
				
		</div>
		
		<!-- Navigation -->
		
		<div id="page-wrapper">

            <?php include "../views/cook.tmpl.php"; ?>
			
		</div>
			
    <!-- /#page-wrapper -->

    </div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../dist/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../resources/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../dist/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../dist/js/jquery.dataTables.min.js"></script>
<script src="../dist/js/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->

<script>
		
$( "[id^=newOrder_]" ).click(function() {
	
	var currentId = $(this).attr('id');
	var newOrderId = currentId.replace(/[^0-9]/g, '');
	
	var newId = "#newOrder_" + newOrderId;
	var start = "#started_"  + newOrderId;
		                                                                 
		$(newId).hide();
		$(start).removeClass("hidden");
	});
	$( "[id^=started_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var start = "#started_"  + newOrderId;
		var finish = "#finished_" + newOrderId;
	
		$(start ).hide();
		$(finish).removeClass("hidden");
	});
	/*$( "[id^=finished_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var finish = "#finished_" + newOrderId;
		var close = "#close_" + newOrderId;
	
		$(finish).hide();
		$(close).removeClass("hidden");
	});
	$( "[id^=close_]" ).click(function() {
		var currentId = $(this).attr('id');
		var newOrderId = currentId.replace(/[^0-9]/g, '');
		
		var orderNo = "#orderNo_" + newOrderId;
		
		$(orderNo).hide();
		
	});*/
</script>

</body>

</html>
