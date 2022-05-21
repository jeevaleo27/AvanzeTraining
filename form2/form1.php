
<html>
<head>
</head>
<body>


	<div class="row grow w-100">
    
    
    
				<?php include 'header.php';?>

				<?php include 'siderbar.php';?>
			
<div id="form" class="main col-10 h-100   py-3">
			    <form   method="POST" name="myForm" action="secondpg.php" onsubmit="return validateForm()"  >
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

				<div class="form-group">
					<input type="submit" value="submit" onclick="return send()" > 
				</div>

			</form>
</div>
		<?php include 'footer.php';?>
	</div>
</body>
</html>
