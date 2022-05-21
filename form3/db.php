


			
					<div id="form2" class="main col-11 h-100   py-3">
						<?php 





						$conn=mysqli_connect("localhost","root","","jeeva");

						if($conn==true){
						// echo "connection successfull";
						}
						else
						{
						echo " failed";
						}


$userid = 0;
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($conn,$_POST['userid']);
   $jeeva=$_POST['userid'];
   echo $jeeva;
}

						$sel=" SELECT * FROM reg_details where S_no=".$jeeva;
						$result= $conn -> query($sel);

						
						if($result ->num_rows>0)
						{

						// echo "field have";
						
						}
						else
							{
								echo "no fileds";

							}
							$response = "<table border='0' width='100%'>";
while( $row = mysqli_fetch_array($result) ){
 $S_no = $row['S_no'];
$fname = $row['Fname'];
$lname = $row['Lname'];
$email = $row["E_Mail"];
$phone = $row['Phone_No'];
$dob  = $row['Dob'];
$gender = $row['Gender'];
$check = $row['Checkk'];
$message = $row['Message'];
$coursee = $row['Course'];

$response .= "<tr>";
 $response .= "<td>S_no : </td><td>".$S_no."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>fname : </td><td>".$fname."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>lname : </td><td>".$lname."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>email : </td><td>".$email."</td>";
 $response .= "</tr>";

 $response .= "<tr>";
 $response .= "<td>phone : </td><td>".$phone."</td>";
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>dob : </td><td>".$dob."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>gender : </td><td>".$gender."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>check : </td><td>".$check."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>message : </td><td>".$message."</td>"; 
 $response .= "</tr>";

 $response .= "<tr>"; 
 $response .= "<td>coursee : </td><td>".$coursee."</td>"; 
 $response .= "</tr>";

}
$response .= "</table>";

echo $response;
exit;





						?>