<?php
	include("connection.php");

	$id = $_GET['id'];

	$sql="delete from feedbacks where fe_id='$id'";
	mysql_query($sql);

	header('location:feedbacks.php');
?>