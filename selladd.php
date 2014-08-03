<?php
require 'connect.php';
include 'options.php';
if(isset($_POST['title']) && isset($_POST['details']) && isset($_POST['price']) && isset($_POST['negotiation']) && isset($_POST['category']))
{
	$title=$_POST['title'];
	$details=$_POST['details'];
	$price=$_POST['price'];
	$negotiation=$_POST['negotiation'];
	$category=$_POST['category'];
	if(!empty($title) && !empty($details) && !empty($price) && !empty($negotiation) && !empty($category))
	{
		$user_serial=$_SESSION['user_serial'];
		$user_id=$_SESSION['user_id'];
		$user_name=$_SESSION['user_name'];
		$user_contact=$_SESSION['user_contact'];
		$user_hostel=$_SESSION['user_hostel'];
		$user_room=$_SESSION['user_room'];
		$status='No Response';
		$today = date("Y-m-d H:i:s");
		$query="INSERT INTO `items` VALUES ('','".$user_id."','".$user_name."','".$user_hostel."','".$user_room."','".$user_contact."','".$title."','".$details."','".$price."','".$negotiation."','".$category."','".$status."','".$today."')";
		if($query_run=mysql_query($query))
		{
			header('Location: userhome.php');

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
Enter book title: <input type="text" name="title"> <br/>
Enter details: <input type="text" name="details"><br/>
Price: <input type="text" name="price"> <br/>
Negotiable:<br /> <input type="radio" name="negotiation" value="y"> Yes<br>
<input type="radio" name="negotiation" value="n"> No <br> 
Category: 
<select name="category">
	<option value="">Select</option>
	<option value="A1">Chemical</option>
	<option value="A3">Electrical, Electronics and Instrumentation</option>
	<option value="A4">Mechanical</option>
	<option value="A7">Computer Science</option>
	<option value="B1">Biological Sciences</option>
	<option value="B2">Chemistry</option>
	<option value="B3">Economics</option>
	<option value="B4">Mathematics</option>
	<option value="B5">Physics</option>
	<option value="H1">Humanities Elective</option>
	<option value="O1">Others</option>
</select> <br/>
<input type="submit" value="Add">
</form>