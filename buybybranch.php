<?php
require 'connect.php';
include 'options.php';
if(isset($_POST['category']))
{
	$category=$_POST['category'];
	if(!empty($category))
	{
		$query="SELECT * FROM `items` WHERE `category`='$category'";
		if($query_run=mysql_query($query))
		{
			 $query_num_rows=mysql_num_rows($query_run);
			 if($query_num_rows==0)
			 {
			    echo "No products selling in the category.";
			 }
			for($a=0;$a<$query_num_rows;$a++)
			{
				if(mysql_result($query_run,$a,'status')=='No Response')
				{
					echo mysql_result($query_run,$a,'title').'<br/>';
					echo mysql_result($query_run,$a,'details').'<br/>';
					echo mysql_result($query_run,$a,'price').'<br/>';
					echo mysql_result($query_run,$a,'negotiation').'<br/>';
					echo mysql_result($query_run,$a,'time').'<br/>';
					echo mysql_result($query_run,$a,'name').'<br/>';
					echo mysql_result($query_run,$a,'hotsel').'<br/>';
					echo mysql_result($query_run,$a,'room').'<br/>';
					echo mysql_result($query_run,$a,'contact').'<br/>';
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
		echo "You must select Category.";
	}
}
?>
<form action="<?php echo $current_file; ?>" method="POST">
Select Category: 
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
<input type="submit" value="Search">
</form>