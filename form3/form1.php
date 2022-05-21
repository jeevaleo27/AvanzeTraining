
<html>
<head>
</head>
<body>


	<div class="row grow w-100">
		
		
		
		<?php include 'header.php';?>

		<?php include 'siderbar.php';?>
		
		<div id="form" class="main col-10 h-100   py-3">
			<form   method="POST" name="myForm" action="secondpg.php" 
			onsubmit="return validateForm()"  >
			<div>
				Bio-Data
			</div>
			<div>
				* Required fieldset
			</div>


			<div class="form-group form-group-sm">
				<label  class="col-sm-2 control-label" for="fname">First name:*</label> 
				
				<input  class="form-control" type="text"   id="fname" name="fname" >
				<p id="alertFname"></p>
				
			</div>

			<div class="form-group">
				<label for="lname">Last name:*</label> <input class="form-control" type="text" id="lname" name="lname" ><p id="alertLname"></p>
			</div>

			<div class="form-group">
				<label for="email">E-Mail:*</label> <input class="form-control" type="email" id="email" name="email"><p id="alertemail"></p>
			</div>

			<div class="form-group">
				<label for="password">password:*</label><input class="form-control" type="password" id="password" name="password"><p id="alertpassword"></p>
			</div>

			<div class="form-group">
				<label for="phone">Phone No:*</label><input class="form-control" type="text" id="phone" name="phone"><p id="alertphone"></p>
			</div>

			<div class="form-group">
				<label for="date">DOB:</label><input  type="date" id="date" name="date" ><p id="alertdate"></p>
			</div>

			<div class="form-group">
				<label for="gender"> Gender :Male:</label><input type="radio" id="male" name="gender"  value="male" >
				
				<label for="gender">Female:</label><input type="radio"  id="female" name="gender" value="female" ><p id="alertgender"></p>
			</div>
			<div class="form-group">
				<label for="save"> Remember me  :</label>tamil<input type="checkbox" id="save" name="save[]" value="Tamil" >
				english<input type="checkbox" id="save" name="save[]" value="English" >
				kannada<input type="checkbox" id="save" name="save[]" value="kannada" >
				telegu<input type="checkbox" id="save" name="save[]" value="Telengu" ><p id="alertcheck"></p>
			</div>

			<div class="form-group">
				<label for="message-box"> message-box</label><textarea id="area" class="form-control" name="area" ></textarea> <p id="alertmessage"></p>
			</div>

			<div class="form-group">
				select course*<select name = "dropdown" class="form-control" id="dropdown" >
					
					<option value = "---"  selected  >------</option>	
					<option value = "Computer Architecture"   >Computer Architecture</option>
					<option value = "Java">Java</option>
					<option value = "Discrete Mathematics">Discrete Mathematics</option>
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
						<tr>
							<!-- <td class='personid'>i</td> -->
							<!-- <td><input type="text" name="S_no"></td> -->
							<td><input type="text" name="course[]" required></td>
							<td><input type="text" name="duration[]" required></td>
							<td><input type="text" name="institute[]" required></td>
							<td><input type="text" name="year[]" required></td>
							<td><input type="text" name="Percentage[]" required></td>
							<td><input type="button" name="" value="-" onclick="deleteRow(this)"></td>
						</tr>
						
					</tbody>
				</table>

				<div class="form-group">
					<input type="submit" value="submit" onclick="return send()" > 
				</div>

			</form>
		</div>
		<?php include 'footer.php';?>
	</div>
</body>
<script type="text/javascript">

	function addRor(){
		
		
		
   // document.getElementsByClassName('table')[0].getElementsByTagName('tbody')[0].innerHTML +=   
  // var table = document.getElementById("myTable").insertRow(-1).innerHTML =
  $('table tbody').append(
  	'<tr><td><input type="text" name="course[]" required></td><td><input type="text" name="duration[]" required></td><td><input type="text" name="institute[]" required></td><td><input type="text" name="year[]" required></td><td><input type="text" name="Percentage[]" required></td><td><input type="button" name="" value="-" onclick="deleteRow(this)" ></td></tr>');
  
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
