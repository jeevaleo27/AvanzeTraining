<?php

// $fname= $_POST['fname'];
// $lname= $_POST["lname"];
// $email= $_POST["email"];
// $password= $_POST["password"];
// $phone= $_POST["phone"];
// $dob= $_POST["date"];
// $gender= $_POST["gender"];
// $check=implode(",",$_POST["save"]);
// $message= $_POST["area"];
// $coursee=$_POST["dropdown"];

?>

<?php
// $conn=mysqli_connect("localhost","root","","jeeva");

// if($conn==true){
// 	echo "connection successfull";
// }
// else
// {
// 	echo " failed";
// }


// $sql="INSERT INTO reg_details (Fname,Lname,E_Mail,Password,Phone_No,Dob,Gender,Checkk,Message,Course) VALUES('$fname','$lname','$email','$password','$phone','$dob','$gender','$check','$message','$coursee')";

// if($conn ->query($sql)==true)

// 	{
// 	echo "data saved";
// }
// else
// {
// 	echo " data failed";
// }
// $last_id=mysqli_insert_id($conn);
// echo $last_id;

// foreach ($_POST['course'] as $key => $value) {

// 	 $course=$_POST["course"][$key];
// 	 $duration=$_POST["duration"][$key];
// 	  $institute=$_POST["institute"][$key];
// 	   $year=$_POST["year"][$key];
// 	      $Percentage=$_POST["Percentage"][$key];



// $sql2="INSERT INTO reg_cours_details
//  (S_no,CourseE,Duration_Of_Course,Institute,Year_Of_Passing,Percentage) VALUES(' $last_id','$course','$duration','$institute','$year','$Percentage')";
//  echo $sql2;
// if($conn ->query($sql2)==true)

// 	{
// 	echo "data2 saved";
// }
// else
// {
// 	echo " data2 failed";
// }

// }

?>

<html>
<head>
</head>
<body>
	
<div class="row grow w-99.8">
    
    
    
				
			
<div id="form" class="main col-12 h-100 py-2">
	

			
			
<div id="form2" class="container">
			<form name="myForm" action="secondpg.php" onsubmit="return validateForm()"  >
			 <div>
			Bio-Data</div>
			


			     <div class="form-group form-group-sm">
						<label   for="fname">First name:*</label><?php //echo $fname ?> 
				</div>


					 <!--<div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      <span class="help-block">This is some help text that breaks onto a new line and may extend more than one line.</span>
    </div>-->

				<div class="form-group">
					<label for="lname">Last name:*</label> <?php //echo $lname ?>
				</div>

				<div class="form-group">
					<label for="email">E-Mail:*</label> <?php //echo $email ?>
				</div>

				<div class="form-group">
					<label for="password">password:*<?php //echo $password ?>
				</div>

				<div class="form-group">
					<label for="phone">Phone No:*<?php //echo $phone ?>
				</div>

				<div class="form-group">
					<label for="date">DOB:<?php //echo $dob ?>
				</div>

				<div class="form-group">
					<label for="gender"> Gender :<?php //echo $gender ?>
				
					
				</div>

				<div class="form-group">
					<label for="save"> Remember me  :<?php //echo $check ?>
				</div>

				<div class="form-group">
					<label for="message-box"> message-box  : <?php //echo $message ?>
				</div>

				<div class="form-group">
					select course*<?php //echo $coursee ?>
				</div>



				<table class="table" id="myTable">
						<tr>
							<!-- <th>S_no</th> -->
							<!-- <th>Course</th>
							<th>Duration_Of_Course</th>
							<th>Institute</th>
							<th>Year_Of_Passing</th>
							<th>Percentage</th>
							
						</tr> 
						<tbody>-->
					<!--  		
						<tr>
							
							<td><?php// echo $course ?></td>
							<td><?php// echo $duration ?></td>
							<td><?php //echo $institute ?></td>
							<td><?php// echo $year ?></td>
							<td><?php// echo $Percentage ?></td>
							
						</tr>
						
						
					 
						</tbody>-->
					</table>

					</div>

				

			</form></div>
</div>
	
</div>
</div>
	
</body>

</html>
