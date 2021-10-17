<?php
	include("connection.php");

	$id = $_GET['id'];

	$sql="delete from menus where m_id='$id'";
	mysql_query($sql);

	header('location:menu.php');
?>