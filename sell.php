<?php
	require 'connect.php';
	include 'options.php';
	$serial=$_GET['link'];
	$query="SELECT * FROM `items` WHERE `serial`='$serial'";
	if($query_run=mysql_query($query))
	{
		$query1="UPDATE `items` SET `status`='Sold' WHERE `serial`='$serial'";
		if($query_run1=mysql_query($query1))
		{
			echo "Marked as sold.";
		}
		else
		{
			echo 'Query Failed.';
		}
	}
	else
	{
		echo "Query failed.";

	}

?>