

<html>
 <head>
  <!-- CSS -->
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
 </head>
 <body >
  <div class="row grow w-100">
 <!--  <?php //include 'header.php';?>
 -->


        <?php include 'siderbar.php';?>
      
          <div id="form2" class="main col-11 h-100   py-3">
  
   <!-- Modal -->
   <!-- <div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog"> -->
      <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
 
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
 </div>

   <br/>
  <table class="table">
    <tr>
              <th>s_no</th>
              <th>F_NAME</th>
              <th>L_NAME</th>
              <th>E_MAIL</th>
              <th>MOBILE_NO</th>
              <th>DOB</th>
              <th>GENDER</th>
              <th>CHECK</th>
              <th>MESSAGE</th>
              <th>COURSE</th>
             <!--  <th>DELETE</th>
              <th>Edit</th> -->
              <th>VIEW</th>
            </tr>
   <?php 
   $conn=mysqli_connect("localhost","root","","jeeva");
   $query = "select * from reg_details";
   $result = mysqli_query($conn,$query);
   if($result ->num_rows>0){}
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
     echo "<td><button data-id='".$S_no."' class='userinfo' data-toggle='modal' data-target='#myModal'>View</button></td>";
      
     echo "</tr>";
   }
   ?>
   </table>
 
  
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function(){

 $('.userinfo').click(function(){
   
   var userid = $(this).attr('data-id');

   // AJAX request
   $.ajax({
    url: 'db.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
      $('.modal-body').html(response);
// $('.modal-body').html(userid);
      // Display Modal
       // $('.modal').modal('show'); 
    }
  });
 });
});
</script>
 </body>
</html>