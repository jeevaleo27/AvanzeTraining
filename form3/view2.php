



<html>
<head>
</head>
<body>
	<div class="row grow w-100">
	<?php include 'header.php';?>



				<?php include 'siderbar.php';?>
			
					<div id="form2" class="main col-10 h-100   py-3">
						<?php 
						$conn=mysqli_connect("localhost","root","","jeeva");

						if($conn==true){
						echo "connection successfull";
						}
						else
						{
						echo " failed";
						}


						// $sel=" SELECT * FROM reg_cours_details";
						$sel="SELECT * FROM reg_cours_details LEFT JOIN  reg_details ON reg_details.S_no=reg_cours_details.S_no ORDER BY reg_details.Fname";




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
							<th>CourseS_no</th>
							<th>S_no</th>
							<th>Fname</th>
								<th>Lname</th>
									<th>check</th>
							<th>Course</th>
							<th>Duration_Of_Course</th>
							<th>Institute</th>
							<th>DOB</th>
							<th>Percentage</th>


							
						</tr>
						
							   <?php
							  while( $row = $result->fetch_assoc())
							  {?>





							     <tr><?php echo" <td>"  .$row["CourseS_no"]. "</td>
											     <td>".$row["S_no"]. "</td>

											       <td>".$row["Fname"]. "</td>
											         <td>".$row["Lname"]. "</td>
											         <td>".$row["Checkk"]. "</td>
							   					<td>".$row["CourseE"]. "</td>
							   					<td>".$row["Duration_Of_Course"]. "</td>
							   					<td>".$row["Institute"]. "</td>
							   					<td>".$row["Year_Of_Passing"]. "</td>
							   					<td>".$row["Percentage"]. "</td>"
							   					;?>

							

						  </tr> <?php } ?>
							

						</table>
								
					</div>
		
		<?php include 'footer.php';?>
	</div>
</body>
<!-- <script language="javascript">
function deleteme(delid) 
{
        window.location.href='delete.php?del_id='+delid+'';
        return true;
}
</script> -->
</html>
