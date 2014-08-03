<?php
require 'connect.php';
require 'core.php';
if(isset($_POST['id']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['contactnumber']))
{
	$id=$_POST['id'];
	$id = strtoupper($id);
	$password=$_POST['password'];
	$name=$_POST['name'];
	$name = strtoupper($name);
	$contactnumber=$_POST['contactnumber'];
	if(!empty($id) && !empty($password) && !empty($name) && !empty($contactnumber))
	{
		$query="SELECT `serial` FROM `users` WHERE `id`='$id'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows!=0)
			{
				echo "ID already registered.";
			}
			else
			{
				$query="INSERT INTO `users` VALUES ('','".$id."','".$name."','".$password."','".$contactnumber."')";
				if($query_run=mysql_query($query))
				{
					
					header('Location: registersuccess.php');

				}
				else
				{
					echo "You cannot be registered right now.";
				}

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
Enter you Complete BITS ID: <input type="text" name="id"> Name: <input type="text" name="name"> Desired Password: <input type="password" name="password"> Contact No: <input type="text" name="contactnumber">
<input type="submit" value="Register">
</form>