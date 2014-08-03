<?php
if(isset($_POST['id']) && isset($_POST['password']))
{
	$id=$_POST['id'];
	$id = strtoupper($id);
	$password=$_POST['password'];

	if(!empty($id) && !empty($password))
	{
		$query="SELECT * FROM `users` WHERE `id`='$id' AND `password`='$password'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows!=1)
			{
				echo "Invalid id or password";
			}
			else
			{
				$user_serial=mysql_result($query_run,0,'serial');
				$_SESSION['user_serial']=$user_serial;
				$user_id=mysql_result($query_run,0,'id');
				$_SESSION['user_id']=$user_id;
				$user_name=mysql_result($query_run,0,'name');
				$_SESSION['user_name']=$user_name;

				header('Location: index.php');
			}
		}
		else
		{
			echo "Query Failed.";
		}

	}
	else
	{
		echo "You must supply an ID and password";
	}
}
?>
<form action="<?php echo $current_file; ?>" method="POST">
ID: <input type="text" name="id"> Password: <input type="password" name="password">
<input type="submit" value="Login">
</form>