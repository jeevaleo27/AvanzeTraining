
<html>
<head>
</head>
<body>
	<?php include 'header.php';?>

		<section  >

				<?php include 'siderbar.php';?>
			
					<div id="form2" class="container">
						<?php 
						$conn=mysqli_connect("localhost","root","","jeeva");

						if($conn==true){
						echo "connection successfull";
						}
						else
						{
						echo " failed";
						}


						$del=" DELETE FROM reg_details WHERE S_no='".$_GET['S_no']."'";
						$result= $conn -> query($del);
						if($result== true)
						{
							echo "delete successufully";
							

						}
						else
						{
							echo "delete  not successufully";
						}

						

						?>
						</section>
		<?php include 'footer.php';?>
	
</body>
<!-- <script language="javascript">
function deleteme(delid) 
{
        window.location.href='delete.php?del_id='+delid+'';
        return true;
}
</script> -->
</html>


