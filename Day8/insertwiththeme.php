
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
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Register Now</h3>
                <form action="" method="post">

                    <div class="form-group">
                        <label style="color:white";>Name</label><input type="text" class="form-control" placeholder="Enter Your Name" name="name" required="">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="mail"
                            required="">
                    </div>
					
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter Your Password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
					
                    <div class="form-group">
                        <label class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Reenter Your Password" name="cpassword"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
					
                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
						
							<label class="col-form-label">Enrollment Number</label>
							<input type="text" name="erno" placeholder="Enter Enrollment Number" class="form-control" required=""><br>
                        </div>



                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
						
							<label class="col-form-label">Birthdate</label>
							<input type="date" name="bdate" placeholder="Enter Birthdate" class="form-control" required=""><br>
                        </div>
					
					<label class="col-form-label">Sem:</label>
					<select name="sem">
					<option>Select Sem</option>
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
					<select name="div">
					<option>Select Division</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					</select><br><br>
					
					
					
				<label class="col-form-label">Mobile Number:</label>
				<input type="text" name="mbno" class="form-control" placeholder="Enter Mobile Number" required><br>

				<label class="col-form-label">Gender:</label>
				<select name="gender" required>
				<option>Select Gender</option> 
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				</select><br><br>


				<label class="col-form-label">Blood Group</label>
				<input type="text" name="bgroup" class="form-control" placeholder="Enter Blood Group" required><br>


				<label class="col-form-label">Address:</label>
				<textarea required name="address" class="form-control"> </textarea><br><br>

				<label class="col-form-label">Area</label>
				<input type="text" name="area" class="form-control" placeholder="Enter Area" required><br>

				<label class="col-form-label">Pincode</label>
				<input type="text" name="pincode" class="form-control" placeholder="Enter Pincode" required><br>


                   <button type="submit" name="btn_submit" class="btn button-style-w3">Register Now</button>
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
	if(isset($_POST['btn_submit']))
	{

		$name=$_POST['name'];
		$erno=$_POST['erno'];
		$sem=$_POST['sem'];
		$div=$_POST['div'];
		$gender=$_POST['gender'];
		$bgrp=$_POST['bgroup'];
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
				echo "<script>alert('Record Inserted Successfully!...');window.location='insertwiththeme.php';</script>";
			}
		}
	}
}
		
else
{
	die(mysqli_error($con));
}
?>
