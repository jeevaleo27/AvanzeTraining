<?php

$conn=mysqli_connect("localhost","root","","jeeva");

if($conn==true){
	echo "connection successfull";
}
else
{
	echo " failed";
}
?>