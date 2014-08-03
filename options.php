<?php
require 'core.php';
		if(loggedin())
		{

		echo '<a href="userhome.php">Home</a><br/>';	
		echo '<a href="selladd.php">Sell</a><br/>';
		echo '<a href="buybybranch.php">Buy</a><br/>';
		echo '<a href="logout.php">Log Out </a><br/>';
	}
else
{
	header('Location: index.php');
}

		
?>
		