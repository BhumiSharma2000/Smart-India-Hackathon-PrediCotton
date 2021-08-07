<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
		$name = $_POST['cotton'];
		$month = $_POST['month'];
		$date = $_POST['date'];
		$state = $_POST['state'];
		$query = "INSERT INTO `tbl_data`(`data_id`, `variety`, `date`, `month`, `state`,active) VALUES ('','$name','$date','$month','$state','1')";
		$result = mysqli_query($con,$query);
		if($result)
		{
			echo "inserted successfully....";	
			header("location:dashboard.php");
		}
	}
?>