<?php 
include "config.php";
?>
<!doctype html>
<html>
 <head>
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
 </head>
 <body >
  <div class="container" >
   <!-- Modal -->
   <div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">User Info</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
 
      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>
    </div>
   </div>

   <br/>
   <table border='1' style='border-collapse: collapse;'>
    <tr>
     <th>Name</th>
     <th>Email</th>
     <th>&nbsp;</th>
    </tr>
   <?php 
   $query = "select * from reg_details";
   $result = mysqli_query($con,$query);
   while($row = mysqli_fetch_array($result)){
     $S_no = $row['S_no'];
echo $S_no;
$fname = $row['Fname'];
$lname = $row['Lname'];
$email = $row["E_Mail"];
$phone = $row['Phone_No'];
$dob  = $row['Dob'];
$gender = $row['Gender'];
$check = $row['Checkk'];
$message = $row['Message'];
$coursee = $row['Course'];

     echo "<tr>";
     echo "<td>".$S_no."</td>";
     echo "<td>".$fname."</td>";
     echo "<td>".$lname."</td>";
     echo "<td>".$email."</td>";
     echo "<td>".$phone."</td>";
     echo "<td>".$dob ."</td>";
     echo "<td>".$gender."</td>";
     echo "<td>".$check."</td>";
     echo "<td>".$message."</td>";
     echo "<td>".$coursee."</td>";
     echo "<td><button data-id='".$S_no."' class='userinfo'>Info</button></td>";
     echo "</tr>";
   }
   ?>
   </table>
 
  </div>
  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
    $(document).ready(function(){

 $('.userinfo').click(function(){
   
   var userid = $(this).attr('data-id');

   // AJAX request
   $.ajax({
    url: 'ajaxfile.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
      $('.modal-body').html(response);

      // Display Modal
      $('#empModal').modal('show'); 
    }
  });
 });
});
  </script>
 </body>
</html>