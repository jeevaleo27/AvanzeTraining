<?php

// $fname= $_POST['fname'];
// $lname= $_POST["lname"];
// $email= $_POST["email"];
// $password= $_POST["password"];
// $phone= $_POST["phone"];
// $dob= $_POST["date"];
// $gender= $_POST["gender"];
// $check= $_POST["save"];
// $message= $_POST["area"];
// $course=$_POST["dropdown"];


if(method=="POST"){
	if(empty($fname= $_POST['fname'])){
		$nameErr="name is required"
	}

}

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


$sql="INSERT INTO reg_details  (lname,fname,e_mail,password,phone_no,dob,gender,message,course) VALUES('$fname','$lname','$email','$password','$phone','$dob','$gender','$message','$course')";

if($conn ->query($sql)==true)

	{
	echo "data saved";
}
else
{
	echo " data failed";
}
?>
