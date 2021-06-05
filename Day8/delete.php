<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	$id=$_GET['id'];
	$delete="delete from student where erno=$id";
	$execute=mysqli_query($con,$delete);
	if($execute)
	{
		echo "<script>alert('Data Deleted Successfully....');window.location='select.php';</script>";
	}
}
else
{
	echo "Failed";
}
?>