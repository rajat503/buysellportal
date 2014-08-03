<?php
	ob_start();
	date_default_timezone_set('Asia/Calcutta');
	session_start();
	$current_file=$_SERVER['SCRIPT_NAME'];

	function loggedin()
	{
		if(isset($_SESSION['user_serial']) && !empty($_SESSION['user_serial']))
		{
			return true;
		}
		else
		{
			return false;
		}

	}
?>
