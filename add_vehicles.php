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
		?>
            <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                    <div class="col-md-12">
                        <h5>Add Vehicles</h5>
	
					<?php 
							session_start();
					
					?>
						
	
	<form method="POST"  id="contactform"  formnovalidate="formnovalidate" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-8">
                       <input type="text" name="name" placeholder="Name *" class="form-control"  ><br>
					</div>
				</div>		
				
				<div class="row">
					<div class="col-md-8">
                       <input type="text" name="model" placeholder="Model *" class="form-control"  ><br>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
                       <input type="text" name="color" placeholder="Color *" class="form-control"  ><br>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
                       <input type="file" name="images"  class="form-control"  ><br>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
                       <input type="text" name="number" placeholder="Number Plate *" class="form-control"  ><br>
					</div>
				</div>		
				 <div class="row">	
				</div>	
				<div class="row">
					<div class="col-md-8">
                      	<input type="submit" class="btn btn-primary btn-lg" name="submit" value="ADD"><br>
					</div>
				</div>	
					
					
					
								

				
		</div>
	</div>




<?php
include ("connection.php");

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
    $model=$_POST['model'];
	$color=$_POST['color'];
	$no_plate=$_POST['number'];
	
	if($_FILES['images']['name']){
		move_uploaded_file($_FILES['images']['tmp_name'], "uploads/".$_FILES['images']['name']);
		$img=$_FILES['images']['name'];
		//echo $img;
		}
	
    $ins="INSERT INTO `vehicle`(`name`, `model`, `color`, `image`, `no_plate`) VALUES ('$name','$model','$color','$img','$no_plate')";
    mysqli_query($con,$ins);
	echo '<script>alert("Succesfully Added!")</script>'; 
}
?>



<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script src="js/validate.js"></script>


</form>	
		</div>
	</div>
</div>
</body>
</html>		 










