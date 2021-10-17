<?php
	include("connection.php");

	$id=$_GET['id'];

	$m_title=$_POST['m_title'];

	$sql="update menus set m_title='$m_title' where m_id='$id'";
	mysql_query($sql);

	header('location:menu.php');
?>