<?php
	session_start();
	include 'header.php';


	if(isset($_GET) & !empty($_GET)){
		$id = $_GET['id'];
		$sql = "DELETE FROM feed WHERE id='$id'";
		if(mysql_query($sql)){
			header('location:fetch1.php');
		}
	}else{
		header('location: fetch1.php');
	}
?>
