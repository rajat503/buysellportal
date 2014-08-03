<?php
require 'core.php';
		if(loggedin())
		{

		echo '<a href="userhome.php">My Courses</a><br/>';	
		echo '<a href="addcourse.php">Add a course</a><br/>';
		echo '<a href="deletecourse.php">Delete a course</a><br/>';
		echo '<a href="searchbyid.php">Seach by ID Number</a><br/>';
		echo '<a href="searchbycourse.php">Search By Course </a><br/>';
		echo '<a href="searchbyname.php">Search By Name </a><br/>';
		echo '<a href="logout.php">Log Out </a><br/>';
	}
else
{
	header('Location: index.php');
}

		
?>
		