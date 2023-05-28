<?php

include ("connection.php");
if(isset($_REQUEST['id']))
{
	
	
	$up="update complaints  set status='Approved' where id='$_REQUEST[id]'";
	mysqli_query($con,$up);
	echo '<script>alert("Succesfully Updated!")</script>'; 
    header('location:view_complaints.php');	
}

?>