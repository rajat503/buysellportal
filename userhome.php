<?php
	require 'connect.php';
	include 'options.php';
	echo "Your current courses:<br/>";
	$id=$_SESSION['user_id'];
	$query="SELECT `courseid` FROM `list` WHERE `id`='$id'";
			if($query_run=mysql_query($query))
			{
			    $query_num_rows=mysql_num_rows($query_run);
				for($a=0;$a<$query_num_rows;$a++)
				{
					echo mysql_result($query_run,$a,'courseid').'<br/>'.'<br>';

				}
			}
			else
			{
				echo "Query Failed.";
			}

?>