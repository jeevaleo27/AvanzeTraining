<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!--   <link rel="stylesheet" type="text/css" href="style.css"> -->
   <script type="text/javascript" src="script.js"></script>
</head><body>
<div class="row grow w-100">
    
    
    <div class="main col-8  h-100 py-3">
        <form  method="POST" name="myForm" action="secondpg.php" onsubmit="return validateForm()"  >
             <div>
                Bio-Data
            </div>
            <div>
                * Required fieldset
            </div>


                 <div class="form-group form-group-sm">
                        <label  class="col-sm-2 control-label" for="fname">First name:*</label> 
                    
                        <input  class="form-control"stype="text"   id="fname" name="fname" >
                    
                </div>

                <div class="form-group">
                    <label for="lname">Last name:*</label> <input class="form-control" type="text" id="lname" name="lname" >
                </div>

                <div class="form-group">
                    <label for="email">E-Mail:*</label> <input class="form-control" type="email" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">password:*</label><input class="form-control" type="password" id="password" name="password">
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
</div>
<div class="row w-100">
    <div class="col-12 py-3 bg-danger">
        Footer
    </div>
</div>
</body>
</html>