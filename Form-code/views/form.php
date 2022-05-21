	<div class="row grow w-99.8">	
       <div id="form" class="main col-12 h-100 py-2">
       	<!-- form starting-->
	  	  <form id="form_class" name="myForm" action="<?phph base_url('Form/secpg')?>">
			  <div>Bio-Data</div>
			    <div>* Required fieldset</div>
			    <!--student details-->
				   <div class="form-group form-group-sm">
					    <label  class="col-sm-2 control-label" for="fname">First name:*</label> 
					    <input  class="form-control" type="text"   id="fname" name="fname" >
						<p id="alertFname"></p>
					</div>

			    	<div class="form-group">
					    <label for="lname">Last name:*</label> <input class="form-control" type="text" id="lname" name="lname" >
					    <p id="alertLname"></p>
				    </div>

				    <div class="form-group">
					    <label for="email">E-Mail:*</label> <input class="form-control" type="email" id="email" name="email">
					    <p id="alertemail"></p>
				    </div>

				    <div class="form-group">
					    <label for="password">password:*</label><input class="form-control"type="password" id="password" name="password">
					    <p id="alertpassword"></p>
				    </div>

				    <div class="form-group">
					    <label for="phone">Phone No:*</label><input class="form-control" type="text" id="phone" name="phone">
					    <p id="alertphone"></p>
				    </div>

				    <div class="form-group">
					    <label for="date">DOB:</label><input  type="date" id="date" name="date" >
					    <p id="alertdate"></p>
				    </div>

				    <div class="form-group">
					    <label for="gender"> Gender :Male:</label><input type="radio" id="male" name="gender"  value="male" >
					    <label for="gender">Female:</label><input type="radio"  id="female" name="gender" value="female" >
					    <p id="alertgender"></p>
				    </div>

				    <div class="form-group">
					    <label for="save"> Remember me  :</label>
					      tamil<input type="checkbox" id="save" name="save[]" value="Tamil" >
					      english<input type="checkbox" id="save" name="save[]" value="English" >
					      kannada<input type="checkbox" id="save" name="save[]" value="kannada" >
					      telegu<input type="checkbox" id="save" name="save[]" value="Telengu" >
					    <p id="alertcheck"></p>
				    </div>

			 	    <div class="form-group">
					    <label for="message-box"> message-box</label><textarea id="area" class="form-control" name="area" ></textarea>
				        <p id="alertmessage"></p>
				    </div>

				    <div class="form-group">
					    select course*<select name = "dropdown" class="form-control" id="dropdown" >
			            <option value = "---"  selected  >------</option>	
                        <option value = "Computer Architecture"   >Computer Architecture</option>
                        <option value = "Java">Java</option>
                        <option value = "Discrete Mathematics">Discrete Mathematics</option>
                        </select><p id="alertdrop"></p>
				    </div>
                               <!-- student courese details-->
					        <table class="table" id="myTable">
						            <tr>
							
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
							 
							            <td><input type="text" name="course[]" ></td>
							            <td><input type="text" name="duration[]" ></td>
							            <td><input type="text" name="institute[]" ></td>
							            <td><input type="text" name="year[]" ></td>
							            <td><input type="text" name="Percentage[]" ></td>
							            <td><input type="button" name="" value="-" onclick="deleteRow(this)"></td>
						            </tr>
						
						      </tbody>
					          </table>

						

			</form>

			<div class="form-group">
							<button class="save_test1" value="submit" >Submit</button>
						</div>
		</div>
	</div>

<!--script for adding a table in the course form  (.. addRow..) -->
<!--script for deleting a table in the course form  (.. deleteRow..) -->
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script>

<script type="text/javascript">

	$(document).ready(function(){
        $('.save_test1').click(function(event){
        	alert('sdf');
        	event.preventDefault();
        	var form = $('#form_class').serialize();
        	$.ajax({
			    url: '<?php echo base_url('Form/create')?>',
			    type: 'POST',
			    data: form,
			    success: function(response){ 
			      // alert(response);
			       // redirect("Form/secpg");
			       window.location.href ='<?php echo base_url('Form/select_data')?>';
			    }
			});
             
         });
    });

	 function addRor(){
       			    document.getElementsByClassName('table')[0].getElementsByTagName('tbody')[0].innerHTML +=   
  				   '<tr><td><input type="text" name="course[]" ></td><td><input type="text"name="duration[]"></td><td><input type="text" name="institute[]" ></td><td><input type="text" name="year[]" ></td><td><input type="text" name="Percentage[]" ></td><td><input type="button" name="" value="-" onclick="deleteRow(this)" ></td></tr>';
                    }
     function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }

  
</script>
