



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
				{?>





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
				<!-- <td id="view"><?php //echo "<a href=\"view.php?S_no=".$row['S_no']."\">view</a> </td>";?> -->
				<td ><button ><a href="viewtemp1.php">view</button></td>
					

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
