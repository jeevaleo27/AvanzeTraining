



<html>
<head>
</head>
<body>
	<div class="row grow w-100">
	<?php include 'header.php';?>



				<?php include 'siderbar.php';?>
			
					<div id="form2" class="main col-11 h-100   py-3">
						<?php 
						$conn=mysqli_connect("localhost","root","","jeeva");

						if($conn==true){
						echo "connection successfull";
						}
						else
						{
						echo " failed";
						}


						$sel=" SELECT * FROM reg_details";
						$result= $conn -> query($sel);
						if($result ->num_rows>0)
						{

						echo "field have";
						
						}
						else
							{
								echo "no fileds";
							}

						?>

						<table class="table"><tr>
							<th>s_no</th>
							<th>F_NAME</th>
							<th>L_NAME</th>
							<th>E_MAIL</th>
							<th>MOBILE_NO</th>
							<th>DOB</th>
							<th>GENDER</th>
							<th>CHECK</th>
							<th>MESSAGE</th>
							<th>COURSE</th>
							<th>DELETE</th>
							<th>Edit</th>
							<th>VIEW</th>
						</tr>
						
							   <?php
							  while( $row = $result->fetch_assoc())
							  { ?>





							     <tr><?php echo" <td>"  .$row["S_no"]. "</td>
											     <td>".$row["Fname"]. "</td>
							   					<td>".$row["Lname"]. "</td>
							   					<td>".$row["E_Mail"]. "</td>
							   					<td>".$row["Phone_No"]. "</td>
							   					<td>".$row["Dob"]. "</td>
							   					<td>".$row["Gender"]. "</td>
							   					<td>".$row["Checkk"]. "</td>
							   					<td>".$row["Message"]. "</td>
							   					<td>".$row["Course"]. "</td>";?>
							   					<td id="delete" style="color: white;" onclick="return confirm('do you want to delete?')" > <?php echo "<a href=\"delete.php?S_no=".$row['S_no']."\">Delete</a> </td>";?>
							   					</td> 
							   					<td id="update"><?php echo "<a href=\"update.php?S_no=".$row['S_no']."\">Edit</a> </td>";?>


							   					<td><button data-id='".$S_no."' class='userinfo' data-toggle='modal' data-target='#myModal'>View</button></td>

							   				<?php } ?>
							   						<div class="container" >
   <!-- Modal -->
   <div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">User Info</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
 
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>

   <br/>
   <table border='1' style='border-collapse: collapse;'>
    <tr>
     <th>Name</th>
     <th>Email</th>
     <th>&nbsp;</th>
    </tr>
   <!--<?php 
   // $query = "select * from employee";
   // $result = mysqli_query($con,$query);
   // while($row = mysqli_fetch_array($result)){
   //   $id = $row['id'];
   //   $name = $row['emp_name'];
   //   $email = $row['email'];

   //   echo "<tr>";
   //   echo "<td>".$name."</td>";
   //   echo "<td>".$email."</td>";

     //echo "<td><button data-id='".$id."' class='userinfo'>Info</button></td>";
     //echo "</tr>";
   }
   ?>-->
   <?php 


						$sel=" SELECT * FROM reg_details";
						$result= $conn -> query($sel);

						
						if($result ->num_rows>0)
						{

						echo "field have";
						
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
   </table>
 
  </div>
				</td>

						  </tr> 
						<!-- <?php } ?>  -->
							

						</table>
								
					</div>



		
		<?php include 'footer.php';?>
	</div>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" 
crossorigin="anonymous">
 $(document).ready(function(){

 $('.userinfo').click(function(){
   
   var userid = $(this).data('id');

   // AJAX request
   $.ajax({
    url: 'db.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
      $('.modal-body').html(response);

      // Display Modal
      $('#empModal').modal('show'); 
    }
  });
 });
});

	
</script>
</html>
