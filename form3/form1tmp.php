
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
					<label for="save"> Remember me</label><input type="checkbox" id="save" name="save" value="ok" ><p id="alertcheck"></p>
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

				<!--<table class="table" id="myTable">
						<tr>
							 <th>S_no</th> 
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
							<td><input type="text" name="S_no"></td> 
							<td><input type="text" name="course"></td>
							<td><input type="text" name="duration"></td>
							<td><input type="text" name="institute"></td>
							<td><input type="text" name="year"></td>
							<td><input type="text" name="Percentage"></td>
							<td><input type="button" name="" value="-" onclick="deleteRow(this)"></td>
						</tr>-->




Item:
<input type="text" name="item" id="item" /><br />
Quantity:
<input type="text" name="quantity" id="quantity" /><br />
Price: AUD
<input type="text" name="price" id="price" /><br /><br />
<input type="button" value="Add Product +" onClick="addRow()" id="add"><br /><br />

<table id="table" border="1">
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
</table>







						
					<!-- 	</tbody>
					</table> -->

				<div class="form-group">
					<input type="submit" value="submit" onclick="return send()" > 
				</div>

			</form>
</div>
		<?php include 'footer.php';?>
	</div>
</body>
<script type="text/javascript">

	function addRow() {
   "use strict";

    var table = document.getElementById("table");
    var row= document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");    

    td1.innerHTML = document.getElementById("item").value;
    td2.innerHTML  = document.getElementById("quantity").value;
    td3.innerHTML  = document.getElementById("price").value;

    row.appendChild(td1);
    row.appendChild(td2);
    row.appendChild(td3);

    table.children[0].appendChild(row);
}
</script>
</html>
