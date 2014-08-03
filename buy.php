<?php
	require 'connect.php';
	include 'options.php';
	$serial=$_GET['link'];
	$query="SELECT * FROM `items` WHERE `serial`='$serial'";
	if($query_run=mysql_query($query))
	{
		$query1="UPDATE `items` SET `status`='Archived' WHERE `serial`='$serial'";
		if($query_run1=mysql_query($query1))
		{
			echo mysql_result($query_run,0,'contact').'<br/>';
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