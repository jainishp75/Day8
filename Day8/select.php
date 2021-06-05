<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	echo "
	<style>
	table,tr,td,th
	{
		text-align:center;
	}
	</style>
	";
	$select="select * from student";
	$execute=mysqli_query($con,$select);
	if($execute)
	{
		echo "<CENTER>";
		echo "<table border='1px'>";
		echo"<tr>
		<th>Enrollment Number</th>
		<th>Name</th>
		<th>Sem</th>
		<th>Division</th>
		<th>Gender</th>
		<th>Blood Group</th>
		<th>Mobile Number</th>
		<th>Email</th>
		<th>Birthdate</th>
		<th>Address</th>
		<th>Area</th>
		<th>Pincode</th>
		<th colspan='2'>Operation</th>
		</tr>";
		while($row=mysqli_fetch_array($execute))
		{
			$erno=$row[0];
			$name=$row[1];
			$sem=$row[2];
			$division=$row[3];
			$gender=$row[4];
			$bgroup=$row[5];
			$mbno=$row[6];
			$mail=$row[7];
			$bdate=$row[9];
			$address=$row[10];
			$area=$row[11];
			$pincode=$row[12];
			echo"<tr>";
			echo "<td>$erno</td>";
			echo "<td>$name</td>";
			echo "<td>$sem</td>";
			echo "<td>$division</td>";
			echo "<td>$gender</td>";
			echo "<td>$bgroup</td>";
			echo "<td>$mbno</td>";
			echo "<td>$mail</td>";
			echo "<td>$bdate</td>";
			echo "<td>$address</td>";
			echo "<td>$area</td>";
			echo "<td>$pincode</td>";
			echo "<td ><a href='delete.php ? id=$erno';>Delete</a></td>";
			echo "<td ><a href='update.php ? id=$erno';>Update</a></td>";
			echo "</tr>";
			echo "</CENTER>";
		}
	}
}
else
{
	echo "Failed";
}
?>