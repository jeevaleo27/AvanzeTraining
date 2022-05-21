
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
   <script type="text/javascript" src="script.js"></script>
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


						$sel=" SELECT * FROM reg_details where S_no='".$_GET['S_no']."'";
						$data= $conn -> query($sel);
						$result=mysqli_fetch_array($data);
					
						if($result ==true)
						{

						echo "field have";

						}
						else
							{
								echo "no fileds";
							}



							$sel1=" SELECT * FROM reg_cours_details where S_no='".$_GET['S_no']."'";
						$data1= $conn -> query($sel1);


						$result1=mysqli_fetch_array($data1);
					echo $result["Course"];
						if($result1 ==true)
						{

						echo " data2 field have";

						}
						else
							{
								echo "no fileds in data2";
							}





							if(isset($_POST['update']))
{

$fname= $_POST['fname'];
$lname= $_POST["lname"];
$email= $_POST["email"];
$password= $_POST["password"];
$phone= $_POST["phone"];
$dob= $_POST["date"];
$gender= $_POST["gender"];
$check= $_POST["save"];
$message= $_POST["area"];
$course=$_POST["dropdown"];



$upd=" UPDATE reg_details SET Fname='$fname',Lname=
'$lname',E_Mail='$email',Password='$password',Phone_No=
'$phone',Dob='$dob',Gender='$gender',Checkk=$check,Message='$message',Course='$course'   WHERE S_no='".$_GET['S_no']."'";
						$result= $conn -> query($upd);
						if($result== true)
						{
							echo "update successufully";
							

						}
						else
						{
							echo "update  not successufully";
						}
					}
?>

						

				<?php include 'siderbar.php';?>
			
<div id="form" class="container">
			    <form   method="POST" name="myForm"  onsubmit="return validateForm()"  >
			 <div>
				Bio-Data
			</div>
			<div>
			 	* Required fieldset
			</div>



			 <div class="form-group form-group-sm">
						<label for="lname">First name:*</label> <input  name="fname" class="form-control" 
					value="<?php echo $result['Lname'] ;?>">
					

					
				</div>
				
				<div class="form-group">
					<label for="lname">Last name:*</label> <input class="form-control"  name="lname"
					value="<?php echo $result['Fname'] ;?>"><p id="alertLname"></p>
				</div>

				<div class="form-group">
					<label for="email">E-Mail:*</label> <input class="form-control" type="email" id="email" name="email" value="<?php echo $result['E_Mail'] ;?>"><p id="alertemail"></p>
				</div>

				<div class="form-group">
					<label for="password">password:*</label><input class="form-control" type="password" id="password" name="password" value="<?php echo $result['Password'] ;?>">
					<p id="alertpassword"></p>
				</div>

				<div class="form-group">
					<label for="phone">Phone No:*</label><input class="form-control" type="text" id="phone" name="phone" value="<?php echo $result['Phone_No'] ;?>"><p id="alertphone"></p>
				</div>

				<div class="form-group">
					<label for="date">DOB:</label><input  type="date" id="date" name="date" value="<?php echo $result['Dob'] ;?>" ><p id="alertdate"></p>
				</div>

				<div class="form-group">
					<label for="gender"> Gender :Male:</label><input type="radio" id="male" name="gender"  value="male" <?php echo $result['Gender'] == "male" ? 'checked' : '' ;?> >
				
					<label for="gender">Female:</label><input type="radio"  id="female" name="gender" value="female"
					<?php echo $result['Gender'] == "female" ? 'checked' : '' ;?> >
					<p id="alertgender"></p>
				</div>

				

				<div class="form-group">
					<label for="save"> Remember me  :</label>tamil<input type="checkbox" id="save" name="save[]" value="Tamil" <?php $check=explode(",",$result['check']); echo in_array('10th',$check)? 'checked="checked"' : '' ;?>>
					english<input type="checkbox" id="save" name="save[]" value="English" >
					kannada<input type="checkbox" id="save" name="save[]" value="kannada" >
					telegu<input type="checkbox" id="save" name="save[]" value="Telengu" ><p id="alertcheck"></p>
				</div>





				</div>

				<div class="form-group">
					<label for="message-box"> message-box</label><textarea id="area" class="form-control" name="area" value=""><?php echo $result['Message'] ;?></textarea> <p id="alertmessage"></p>
				</div>

				<div class="form-group">
					select course*<select name = "dropdown" class="form-control" id="dropdown" >
				
			<option value = "no"<?php echo $result['Course'] == "no" ? 'selected="selected"' : '' ;?>  >------</option>	
            <option value = "Computer Architecture"  value = "no"<?php echo $result['Course'] == "Computer Architecture" ? 'selected="selected"' : '' ;?> >Computer Architecture</option>
            <option value = "Java" <?php echo $result['Course'] =="Java" ? 'selected="selected"' : '' ;?> >Java</option>
            <option value = "Discrete Mathematics" <?php echo $result['Course'] =="Discrete Mathematics" ? 'selected="selected"' : '' ;?>>Discrete Mathematics</option>
         </select><p id="alertdrop"></p>
				</div>

				<table class="table" id="myTable">
						<tr>
							<!-- <th>S_no</th> -->
							<th>Course</th>
							<th>Duration_Of_Course</th>
							<th>Institute</th>
							<th>Year_Of_Passing</th>
							<th>Percentage</th>
							<th>Action<input type="button" name="" value="+" 
								onclick="addRor()"></th>
						</tr>
						<tbody>
							<? php

while($row = mysqli_fetch_array($result))
{ ?>

						
						<tr>
							  <td class='personid'>i</td>
							<td><input type="text" name="S_no"></td>
							<td><input type="text" name="course[]" value="<?php echo $result1['Course'] ;?>" required=""></td>
							<td><input type="text" name="duration[]" value="<?php echo $result1['Duration_Of_Course'] ;?>" required=""></td>
							<td><input type="text" name="institute[]" value="<?php echo $result1['Institute'] ;?>" required=""></td>
							<td><input type="text" name="year[]" value="<?php echo $result1['Year_Of_Passing'] ;?>" required=""></td>
							<td><input type="text" name="Percentage[]"  value="<?php echo $result1['Percentage'] ;?>" required=""></td>
							<td><input type="button" name="" value="-" onclick="deleteRow(this)"></td>
						</tr>

						<tr>
							  <!-- <td class='personid'>i</td> -->
							<!-- <td><input type="text" name="S_no"></td> -->
							<td><input type="text" name="course[]" value="<?php echo $result1['Course'] ;?>" required=""></td>
							<td><input type="text" name="duration[]" value="<?php echo $result1['Duration_Of_Course'] ;?>" required=""></td>
							<td><input type="text" name="institute[]" value="<?php echo $result1['Institute'] ;?>" required=""></td>
							<td><input type="text" name="year[]" value="<?php echo $result1['Year_Of_Passing'] ;?>" required=""></td>
							<td><input type="text" name="Percentage[]"  value="<?php echo $result1['Percentage'] ;?>" required=""></td>
							<td><input type="button" name="" value="-" onclick="deleteRow(this)"></td>
						</tr>
						
						<?php }?>
						</tbody>
					</table>

				<div class="form-group">
					<input type="submit" value="submit" name="update" onclick="return send()" > 
				</div>

			</form>
</div> 






		</section>
		<?php include 'footer.php';?>
	
</body>
<script type="text/javascript">

	function addRor(){
	
  
      
   document.getElementsByClassName('table')[0].getElementsByTagName('tbody')[0].innerHTML +=   
  // var table = document.getElementById("myTable").insertRow(-1).innerHTML =
  '<tr><td><input type="text" name="course[]" required></td><td><input type="text" name="duration[]" required></td><td><input type="text" name="institute[]" required></td><td><input type="text" name="year[]" required></td><td><input type="text" name="Percentage[]" required></td><td><input type="button" name="" value="-" onclick="deleteRow(this)" ></td></tr>';
 
}

function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }

// function add_fields() {    
// document.getElementById("myTable").insertRow(-1).innerHTML = '<tr><td><textarea name="Question" placeholder="Question" th:field="${questionAnswerSet.question}" id="question" style = "resize: none; width:100%;"></textarea></td><td><textarea name="Answer" placeholder ="Answer" th: field="${questionAnswerSet.answer}" id="answer" style="resize:none;width: 100%;"></textarea></td ></tr>';
// }
</script>
</html>
