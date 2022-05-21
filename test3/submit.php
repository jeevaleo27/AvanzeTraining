<?php
$con=mysqli_connect("localhost","root","","employee");
//print_r($_POST);
if (isset($_POST['insert'])) {
	$Name=$_POST['Name'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Mobile=$_POST['Mobile'];

	$sql_1="INSERT INTO emplolyedetails(Name,DOB,Address,Email,Mobile)VALUES('$Name','$DOB','$Address','$Email','$Mobile')";
	mysqli_query($con, $sql_1);
	$last_id=mysqli_insert_id($con);

foreach ($_POST['Qualification'] as $key => $value) {

	$Qualification=$_POST['Qualification'][$key];
	$YearOfPass=$_POST['YearOfPass'][$key];
	$Institution=$_POST['Institution'][$key];

	$sql_2="INSERT INTO `employeeducationalqualification`(`YearOfPass`, `Qualification`, `Institution`, `EmployeUID`) VALUES ('$YearOfPass','$Qualification','$Institution','$last_id')";
	mysqli_query($con,$sql_2);
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST">
<div id="forms" >
	
		<label>Name</label>
		<input type="text" name="Name">
		<label>DOB</label>
		<input type="date" name="DOB">
		<label>Address</label>
		<textarea name="Address"></textarea>
		<label>E-mail</label>
		<input type="email" name="Email">
		<label>Mobile</label>
		<input type="number" name="Mobile">
	<button type="submit" name="insert" id="insert">Insert</button>
</div>
<div id="table_forms">
	<table>
		<thead>
		<tr>
			<th>Educational Qualification</th>
			<th>Year Of Pass</th>
			<th>Institution</th>
		</tr>
		</thead>
		<tbody id="table_body">
			<tr>
				<td>
					<div class="custom-select" style="width:200px;">
					<select name="Qualification[]">
						<option value="10">10</option>
						<option value="12">12</option>
						<option value="degree">Degree</option>
					</select>
				</div>
				</td>
				<td><input type="number" name="YearOfPass[]"></td>
				<td><input type="text" name="Institution[]"></td>
				<td><button type="button" onclick=" $(this).closest('tr').remove()">Remove</button></td>
							</tr>
		</tbody>
	</table>
	<button type="button" onclick="add_row()" style="float: right;clear: right;">Add Qualification</button>


</div>

</form>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>