<!DOCTYPE html>
<?php
//include("sidebar.php");

?>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
      <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
include("sidebar.php");

include ("connection.php");
if(isset($_POST['submit']))
{
	
	
	$up="update complaints  set status='Viewed' where id='$_REQUEST[id]'";
	mysqli_query($con,$up);
	echo '<script>alert("Succesfully Updated!")</script>'; 
    header('location:view_complaints.php');	
}
	$sel="select * from complaints where id='$_REQUEST[id]'";
	$res=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($res);	

?>
		<div id="page-wrapper">
			
            <div id="page-inner">
           <form method="POST"  id="contactform">  
   	   
				<div class="row">
					<div class="col-md-8">
                      	<input type="submit"  class="btn btn-primary " name="submit" value="VERIFY" >
					</div>
				</div>	
					
					
 



</form>
</div>
</div>
</body>
</html>
