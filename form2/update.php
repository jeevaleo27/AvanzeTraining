
<html>
<head>
</head>
<body>
	<?php include 'header.php';?>

			<section>
				<?php 
						$conn=mysqli_connect("localhost","root","","jeeva");

						if($conn==true){
						echo "connection successfull";
						}
						else
						{
						echo " failed";
						}


						$sel=" SELECT * FROM reg_details where s_no='".$_GET['s_no']."'";
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
<!-- 
							//<?php //echo" <td>"  .$row["s_no"]. "</td>
											    // <td>".$row["lname"]. "</td>
							   					//<td>".$row["fname"]. "</td>
							   					//<td>".$row["e_mail"]. "</td>
							   					//<td>".$row["phone_no"]. "</td>
							   					//<td>".$row["dob"]. "</td>
							   					//<td>".$row["gender"]. "</td>
							   					//<td>".$row["message"]. "</td>
							   					//<td>".$row["course"]. "</td>";?> -->






				<?php include 'siderbar.php';?>
			
<div id="form" class="container">
			    <form   method="POST" name="myForm" action="secondpg.php" onsubmit="return validateForm()"  >
			 <div>
				Bio-Data
			</div>
			<div>
			 	* Required fieldset
			</div>
<?php
			while( $row = $result->fetch_assoc())
						{
						echo '
						$fname   ='.$row["lname"].';
						$lname= '.$row["fname"].';
						$email=' .$row["e_mail"].';
						$password=' .$row["password"].';
						$phone=' .$row["phone_no"].';
						$dob=' .$row["dob"].';
						$gender= '.$row["gender"].';
						
						$message=' .$row["message"].';
						$course='.$row["course"].';'?>
						<? php echo $fname  ?> 
					


			 <div class="form-group form-group-sm">
						'First name:*</label> 
					
						<input  class="form-control" value=  > 
					
				</div>
				
				<div class="form-group">
					<label for="lname">Last name:*</label> <input class="form-control" 
					value= echo $lname >
				</div>

				<div class="form-group">
					<label for="email">E-Mail:*</label> <input class="form-control" type="email" id="email" name="email">
				</div>

				<div class="form-group">
					<label for="password">password:*</label><input class="form-control" type="password" id="password" name="password" value="123456">
				</div>

				<div class="form-group">
					<label for="phone">Phone No:*</label><input class="form-control" type="text" id="phone" name="phone">
				</div>

				<div class="form-group">
					<label for="date">DOB:</label><input  type="date" id="date" name="date" >
				</div>

				<div class="form-group">
					<label for="gender"> Gender :Male:</label><input type="radio" id="male" name="gender"  value="male" >
				
					<label for="gender">Female:</label><input type="radio"  id="female" name="gender" value="female" >
				</div>

				<div class="form-group">
					<label for="save"> Remember me</label><input type="checkbox" id="save" name="save" value="ok" >
				</div>

				<div class="form-group">
					<label for="message-box"> message-box</label><textarea id="area" class="form-control" name="area" ></textarea> 
				</div>

				<div class="form-group">
					select course*<select name = "dropdown" class="form-control" id="dropdown" >
				
			<option value = "---"  selected  >------</option>	
            <option value = "Computer Architecture"   >Computer Architecture</option>
            <option value = "Java">Java</option>
            <option value = "Discrete Mathematics">Discrete Mathematics</option>
         </select>
				</div>

				<div class="form-group">
					<input type="submit" value="submit" onclick="return send()" > 
				</div>

			</form>
</div> 

<?php }?>


<?php


$upd=" UPDATE reg_details SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'WHERE CustomerID = 1;  s_no='".$_GET['s_no']."'";
						$result= $conn -> query($upd);
						if($result== true)
						{
							echo "update successufully";
							

						}
						else
						{
							echo "update  not successufully";
						}
?>
		</section>
		<?php include 'footer.php';?>
	
</body>
</html>
