<?php
	session_start();
	include 'conn.php';
	include 'function.php';
	

	if(isset($_GET['id']) AND intval($_GET['id']) > 0){
		$id = $_GET['id'];

		$sql = "DELETE FROM products WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			$delete_mode = true;
		}
		else {
			$delete_mode = false;
		}
	}
	else{
		$delete_mode = false;
	}
	
	if($delete_mode){
		header('Location: http://localhost:8080/Project/admin/productmanagement.php?type=success&msg='.urlencode("Product Delete"));
	}
	else{
		header('Location: http://localhost:8080/Project/admin/productmanagement.php?type=error&msg='.urlencode("Invalid Product found"));
	}
	die();
?>