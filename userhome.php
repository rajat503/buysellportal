<?php
	require 'connect.php';
	include 'options.php';
	echo "Your selling list: <br/>";
	$id=$_SESSION['user_id'];
	$query="SELECT * FROM `items` WHERE `id`='$id'";
			if($query_run=mysql_query($query))
			{
			    $query_num_rows=mysql_num_rows($query_run);
			    if($query_num_rows==0)
			    {
			    	echo "No products in your selling list";
			    }
				for($a=0;$a<$query_num_rows;$a++)
				{
					if(mysql_result($query_run,$a,'status')=='Archived' || mysql_result($query_run,$a,'status')=='No Response')
					{
						echo mysql_result($query_run,$a,'title').'<br/>';
						echo mysql_result($query_run,$a,'status').'<br/>'.'<br/>';
					}
				}
			}
			else
			{
				echo "Query Failed.";
			}

?>