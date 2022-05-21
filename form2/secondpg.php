<?php

$fname= $_POST['fname'];
$lname= $_POST["lname"];
$email= $_POST["email"];
$password= $_POST["password"];
$phone= $_POST["phone"];
$dob= $_POST["date"];
$gender= $_POST["gender"];
$check=implode(",",$_POST["save"]);
$message= $_POST["area"];
$course=$_POST["dropdown"];




?>

<?php
$conn=mysqli_connect("localhost","root","","jeeva");

if($conn==true){
	echo "connection successfull";
}
else
{
	echo " failed";
}


$sql="INSERT INTO reg_details  (Fname,Lname,E_Mail,Password,Phone_No,Dob,Gender,Checkk,Message,Course) VALUES('$fname','$lname','$email','$password','$phone','$dob','$gender','$check','$message','$course')";

if($conn ->query($sql)==true)

	{
	echo "data saved";
}
else
{
	echo " data failed";
}
?>

<html>
<head>
</head>
<body>
	<?php include 'header.php';?>

			<section  >

				<?php include 'siderbar.php';?>
			
<div id="form2" class="container">
			<form name="myForm" action="secondpg.php" onsubmit="return validateForm()"  >
			 <div>
			Bio-Data</div>
			


			     <div class="form-group form-group-sm">
						<label   for="fname">First name:*</label><?php echo $fname ?> 
				</div>


					 <!--<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      <span class="help-block">This is some help text that breaks onto a new line and may extend more than one line.</span>
    </div>-->

				<div class="form-group">
					<label for="lname">Last name:*</label> <?php echo $lname ?>
				</div>

				<div class="form-group">
					<label for="email">E-Mail:*</label> <?php echo $email ?>
				</div>

				<div class="form-group">
					<label for="password">password:*<?php echo $password ?>
				</div>

				<div class="form-group">
					<label for="phone">Phone No:*<?php echo $phone ?>
				</div>

				<div class="form-group">
					<label for="date">DOB:<?php echo $dob ?>
				</div>

				<div class="form-group">
					<label for="gender"> Gender :<?php echo $gender ?>
				
					
				</div>

				<div class="form-group">
					<label for="save"> Remember me  :<?php echo $check ?>
				</div>

				<div class="form-group">
					<label for="message-box"> message-box  : <?php echo $message ?>
				</div>

				<div class="form-group">
					select course*<?php echo $course ?>
				</div>

					</div>

				

			</form></div>
</div>
		</section>
		<?php include 'footer.php';?>
	
</body>
</html>
