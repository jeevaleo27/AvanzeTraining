function validateForm() { 



 	

 							/* first name*/
                              var fname= document.forms["myForm"]["fname"].value;
							  if (fname == "") 
							  {
								alert("FName must be filled out");
								return false;
							  }

							  /* last name*/
  
							   var lname= document.forms["myForm"]["lname"].value;
							   if (lname == "") 
							  {
								alert("LName must be filled out");
								return false;
							  }
							    /*check box*/

							if(!document.getElementById('save').checked){
								alert('Checkbox not checked');
								return false;}




								/* dropdown*/
							var empty = document.getElementById("dropdown").value;

					        if (empty == "0") {
					            alert('Please select an item');
					            return false;
					        }
					       

					        /* password*/
							  var password = document.forms["myForm"]["password"].value;
							  if (password == "") 
							  {
								alert("password must be filled out");
								return false;
							  }
							 



							/* radio bhutton*/
								var radio = document.forms["myForm"]["gender"].value;
							  if (radio == "") 
							  {
								alert("fill the radio button ");
								return false;
							  }



							  /* email*/
							  var email = document.getElementById("email").value;
							  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false);
            }



            /* date*/


             var dat = document.forms["myForm"]["date"].value;
							  if (dat == "") 
							  {
								alert("fill date ");
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
								alert("It is not valid mobile number");
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


