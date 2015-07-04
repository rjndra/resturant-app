<?php 

function connect() {
	try {
		$pdo = new PDO ( "mysql:host=localhost;dbname = hitech_resturant",'root','');
	}
	catch(PDOException $e) {
		 print "Error!: " . $e->getMessage() . "<br/>";
   		 die();
	}							
}

function get_tbl_order($id) {
	global $pdo;
	$stmt = $pdo-> prepare('SELECT * FROM tbl_order
							WHERE tbl_order_id LIKE :data');
	$stmt -> execute(array(':data'=>$data));
	return $stmt-> fetchAll(PDO::FETCH);
	
}

?>