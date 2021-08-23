<?php
	include 'connection.php';
	$id=$_GET['idd'];
	$sqlquery="delete from product where Id='$id'";
	$proquery=mysqli_query($conn,$sqlquery);
	header('location:Dashboard.php');

	





?>