function validateForm() { 



 	

 							/* first name*/
                              var fname= document.forms["myForm"]["fname"].value;
							  if (fname == "") 
							  {

							  	document.getElementById("alertFname").innerHTML = " * First name required";
								// alert("FName must be filled out");
								return false;
							  }

							  /* last name*/
  
							   var lname= document.forms["myForm"]["lname"].value;
							   if (lname == "") 
							  {
								document.getElementById("alertLname").innerHTML = " *Last name required";
								return false;
							  }
							    /*check box*/

							if(!document.getElementById('save').checked){
								 var check = document.forms["myForm"]["check"].value;
							  if (check == "") 
								document.getElementById("alertcheck").innerHTML = " *check box not checked";
								return false;}

							// var form_data = new FormData(document.querySelector("form"));
						 //    if(!form_data.has("save[]"))
						 //    {
						 //        // document.getElementById("chk_option_error").style.visibility = "visible";
						 //        alert('No item selected');
						 //        return false;
					  //       }
						    
						 //    else
						 //    {
						 //        document.getElementById("chk_option_error").style.visibility = "hidden";
						 //        alert('No item selected');
						 //    }
						 //    return false;

							 // var i,
							 //  chks = document.getElementsByName('save[]');
							  
							 //  for (i = 0; i < chks.length; i++){
							 //    if (chks[i].checked){
							        
							 //      //Here how i should alert selected values 
							        
							 //        return true;
							 //    }else{
							 //        alert('No item selected');
							 //        return false;
							 //    }
							 //  }




								/* dropdown*/
							var empty = document.getElementById("dropdown").value;

					        if (empty == "0") {
					           document.getElementById("alertdrop").innerHTML = " * please select an item";
					            return false;
					        }
					       

					        /* password*/
							  var password = document.forms["myForm"]["password"].value;
							  if (password == "") 
							  {
								document.getElementById("alertpassword").innerHTML = " * password required";
								return false;
							  }
							 



							/* radio bhutton*/
								var radio = document.forms["myForm"]["gender"].value;
							  if (radio == "") 
							  {
								document.getElementById("alertgender").innerHTML = " * gender required";
								return false;
							  }



							  /* email*/
							  var email = document.getElementById("email").value;
							  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
            {
              document.getElementById("alertemail").innerHTML = " * E_mail required";
                return (false);
            }



            /* date*/


             var dat = document.forms["myForm"]["date"].value;
							  if (dat == "") 
							  {
								document.getElementById("alertdate").innerHTML = " *DOB required";
								return false;
							  }
							  
								 


            	/* phone number*/
							   var phone = document.getElementById("phone").value;
								var pattern = /^[7-9][0-9]{9}$/;
								if (pattern.test(phone)) 
								{
									alert("Your mobile number : "+mobile);
									return true;
								}
								document.getElementById("alertphone").innerHTML = " * mobile required";
								return false;


								/* date*/
								 var date = document.getElementById("date").value;
							 var dateformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
					            
					            if (dateformat.test(date) == false) 
					           {
					                alert('Invalid date');
					                return (false);
					            }

 
    }



