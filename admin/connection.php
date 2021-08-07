<?php
	$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo "Server not found...";
	}
	if(!mysqli_select_db($con,'predicotton'))
	{
		echo "Database not found...";
	}
?>