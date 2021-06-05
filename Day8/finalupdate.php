<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	if(isset($_POST['btn_update']))
	{
		$erno=$_POST['erno'];
		$name=$_POST['name'];
		$sem=$_POST['sem'];
		$division=$_POST['division'];
		$gender=$_POST['gender'];
		$bgroup=$_POST['bgroup'];
		$mbno=$_POST['mbno'];
		$mail=$_POST['mail'];
		$bdate=$_POST['bdate'];
		$address=$_POST['address'];
		$area=$_POST['area'];
		$pincode=$_POST['pincode'];

		$update="update student set erno=$erno,name='$name',sem=$sem,division='$division',gender='$gender',bgroup='$bgroup',mbno=$mbno,mail='$mail',bdate=$bdate,address='$address',area='$area',pincode=$pincode";
		echo "<br><br><br>$update";

		$execute=mysqli_query($con,$update);

		if($execute)
		{
			echo "<script>alert('Data Updated Successfully!...');window.location='select.php';</script>";	
		}
		else
		{
			echo mysqli_error($con);
		}

	}
}
else
{
	echo mysqli_error($con);
}
?>

