BuySellPortal

<?php
	require 'core.php';
	require 'connect.php';
	if(loggedin())
	{
		header('Location: userhome.php');
	}
	else
	{
		include 'loginform.php';

	}
	

?>
<a href="register.php">Register Here </a>