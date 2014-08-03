<?php
require 'core.php';
		if(loggedin())
		{

		echo '<a href="userhome.php">Home</a><br/>';	
		echo '<a href="selladd.php">Sell</a><br/>';
		echo '<a href="searchbyproduct.php">Search by Product</a><br/>';
		echo '<a href="searchbyid.php">Seach by ID Number</a><br/>';
		echo '<a href="searchbyname.php">Search By Name </a><br/>';
		echo '<a href="logout.php">Log Out </a><br/>';
	}
else
{
	header('Location: index.php');
}

		
?>
		