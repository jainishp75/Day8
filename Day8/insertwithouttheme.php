<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	$name=$_POST['name'];
	$erno=$_POST['erno'];
	$sem=$_POST['sem'];
	$div=$_POST['div'];
	$gender=$_POST['gender'];
	$bgrp=$_POST['bgrp'];
	$mbno=$_POST['mbno'];
	$mail=$_POST['mail'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$bdate=$_POST['bdate'];
	$address=$_POST['address'];
	$area=$_POST['area'];
	$pincode=$_POST['pincode'];

	/*Password Checking*/
	if($password!=$cpassword)
	{
			echo"<script>alert('Password Mismatch')</script>";
	}
	else
	{
		$query="insert into student(erno, name, sem, division, gender, bgroup, mbno, mail, password, bdate, address, area, pincode) values ('{$erno}','{$name}','{$sem}','{$div}','{$gender}','{$bgrp}','{$mbno}','{$mail}','{$password}','{$bdate}','{$address}','{$area}','{$pincode}')";

		$execute=mysqli_query($con,$query);

		if($execute)
		{
			echo "<script>alert('Record Inserted Successfully!...')</script>";
		}
	}
}
else
{
	die(mysqli_error($con));
}
?>
<html>
	<head>
		<title>
			Registration
		</title>

		<style type="text/css">
			body
			{
				background-color: white;
			}
			.a
			{
				margin-top:100px;
			}	
			td
			{
				text-align:center;
			}
			tr:hover
			{
				background-color: #D3D3D3;
			}
			h3
			{
				text-align: center;
			}
			table
			{				
			}
		</style>
	</head>

	<body>
		<form method="POST" action="">
			<div align="center" class="a">
			<h1><u>Registration</u></h1>	
			<table border="3.5px" cellspacing="3px">


				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></input></td>
				</tr>


				<tr>
					<td>Enrollment Number</td>
					<td><input type="text" name="erno"></input></td>
				</tr>

				<tr>
					<td>Sem</td>
					<td><input type="number" name="sem"  min="1" max="8"></input></td>
				</tr>


				<tr>
					<td>Division</td>
					<td>
						<select name="div">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>	
					</td>
				</tr>


				<tr>
					<td>Gender</td>
					<td>
						<select name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>	
					</td>
				</tr>


				<tr>
					<td>Blood Group</td>
					<td><input type="text" name="bgrp"></input></td>
				</tr>


				<tr>
					<td>Mobile Number</td>
					<td><input type="text" name="mbno"></input></td>
				</tr>


				<tr>
					<td>Email</td>
					<td><input type="mail" name="mail"></input></td>
				</tr>


				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></input></td>
				</tr>


+				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="cpassword"></input></td>
				</tr>

				<tr>
					<td>Birthdate</td>
					<td><input type="date" name="bdate"></input></td>
				</tr>

				<tr>
					<td>Address</td>
					<td><textarea name="address"></textarea></td>
				</tr>


				<tr>
					<td>Area</td>
					<td><input type="area" name="area"></input></td>
				</tr>


				<tr>
					<td>Pincode</td>
					<td><input type="text" name="pincode"></input></td>
				</tr>

				<tr>
					<td rowspan="2" colspan="2">
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>


			</table>
		</div>
		</form>
			
	</body>

</html>