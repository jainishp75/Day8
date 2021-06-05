<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	$eid=$_GET['id'];
	$select="select * from student where erno = $eid";
	$execute=mysqli_query($con,$select);
	if(mysqli_num_rows($execute)>=1)
	{
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
		}
	}
	else
	{
		echo mysqli_error($con);
	}
}
else
{
	echo mysqli_error($con);
}
?>
<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="My School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<style>
	select
	{
		width:565px;
		height:40px;
		
	}
	</style>
</head>
<body>
    <div class="inner-banner-w3ls py-5" id="home">
        <div class="container py-xl-5 py-lg-3">      
            <div class="modal-body mt-md-2 mt-5">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Update</h3>
                <form action="" method="POST">
                	<!--Hidden Value-->

                	<input type="hidden" name="oldid" value=<?php echo $eid?>>


                    <div class="form-group">
                        <label style="color:white";>Name</label><input type="text" class="form-control" placeholder="Enter Your Name" name="name" required value=<?php echo $name;?>>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="mail"
                            required="" value=<?php echo $mail;?> >
                    </div>
					
                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
						
							<label class="col-form-label">Enrollment Number</label>
							<input type="text" name="erno" placeholder="Enter Enrollment Number" class="form-control" required="" value=<?php echo $erno;?>><br>
                        </div>



                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
						
							<label class="col-form-label">Birthdate</label>
							<input type="date" name="bdate" placeholder="Enter Birthdate" class="form-control"  value=<?php echo $bdate;?> required><br>
                        </div>
					
					<label class="col-form-label">Sem:</label>
					<select name="sem">
					<option value=<?php echo $sem;?>><?php echo $sem;?></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					</select><br><br>
					
					
					
					
					<label class="col-form-label">Division:</label>
					<select name="division">-
					<option value=<?php echo $division;?>><?php echo $division;?></option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					</select><br><br>
					
					
					
				<label class="col-form-label">Mobile Number:</label>
				<input type="text" name="mbno" class="form-control" placeholder="Enter Mobile Number" value=<?php echo $mbno;?> required><br>

				<label class="col-form-label">Gender:</label>
				<select name="gender" required>
				<option value=<?php echo $gender;?>><?php echo $gender;?></option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				</select><br><br>


				<label class="col-form-label">Blood Group</label>
				<input type="text" name="bgroup" value=<?php echo $bgroup;?> class="form-control" placeholder="Enter Blood Group" required><br>


				<label class="col-form-label">Address:</label>
				<textarea required name="address" class="form-control">
					 <?php echo $address;?> 
					</textarea><br><br>

				<label class="col-form-label">Area</label>
				<input type="text" name="area" class="form-control" placeholder="Enter Area" required value=<?php echo $area;?>><br>

				<label class="col-form-label">Pincode</label>
				<input type="text" name="pincode" class="form-control" placeholder="Enter Blood Group" required value=<?php echo $pincode;?>><br>


                   <button type="submit" name="btn_update" class="btn button-style-w3">Update Now</button>
                </form>
            </div>   
        </div>
    </div>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","internship");
if($con)
{
	if(isset($_POST['btn_update']))
	{
		$oldid=$_POST['oldid'];
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

		$update="update student set erno=$erno,name='$name',sem=$sem,division='$division',gender='$gender',bgroup='$bgroup',mbno=$mbno,mail='$mail',bdate='$bdate',address='$address',area='$area',pincode=$pincode where erno=$oldid";
		
		
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

