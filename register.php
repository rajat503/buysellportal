<?php
require 'connect.php';
require 'core.php';
if(isset($_POST['id']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['contactnumber']) && isset($_POST['hostel']) && isset($_POST['room']))
{
	$id=$_POST['id'];
	$id = strtoupper($id);
	$password=$_POST['password'];
	$name=$_POST['name'];
	$name = strtoupper($name);
	$contactnumber=$_POST['contactnumber'];
	$hostel=$_POST['hostel'];
	$room=$_POST['room'];
	if(!empty($id) && !empty($password) && !empty($name) && !empty($contactnumber) && !empty($room) && !empty($hostel))
	{
		$query="SELECT `serial` FROM `users` WHERE `id`='$id'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows!=0)
			{
				echo "ID already registered. Please report to the admin if you did not register before.";
			}
			else
			{
				$query="INSERT INTO `users` VALUES ('','".$id."','".$name."','".$password."','".$contactnumber."','".$hostel."','".$room."')";
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
		echo "You must enter all fields.";
	}
}
?>
<form action="<?php echo $current_file; ?>" method="POST">
Enter you Complete BITS ID: <input type="text" name="id"> <br/>
Name: <input type="text" name="name"><br/>
Desired Password: <input type="password" name="password"> <br/>
Contact No: <input type="text" name="contactnumber"> <br/> 
Hostel: 
<select name="hostel">
	<option value="">Select</option>
	<option value="AH1">AH1</option>
	<option value="AH2">AH2</option>
	<option value="AH3">AH3</option>
	<option value="AH4">AH4</option>
	<option value="AH5">AH5</option>
	<option value="AH6">AH6</option>
	<option value="AH7">AH7</option>
	<option value="AH8">AH8</option>
	<option value="CH1">CH1</option>
	<option value="CH2">CH2</option>
	<option value="CH3">CH3</option>
	<option value="CH4">CH4</option>
	<option value="CH5">CH5</option>
	<option value="CH6">CH6</option>
</select> <br/>
Room No: <input type="text" name="room"> <br/>
<input type="submit" value="Register">
</form>