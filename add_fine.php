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
                        <h5>Add Fines</h5>
	




					<?php 
							session_start();
					
					?>
							
					
                 				
	
	
	
	<form method="POST"  id="contactform"  formnovalidate="formnovalidate" enctype="multipart/form-data">
						
						
				 <select class="form-control" name='vehicle_no'>
							
                       <?php 
							include ("connection.php");
							$sel2="SELECT * FROM vehiclee";
							$res2=mysqli_query($con,$sel2);
							
							while($row2=mysqli_fetch_array($res2))
							{
							?>
							
						
						<option value="<?php echo$row2['vehicle_no'];?>"><?php echo$row2['vehicle_no'];?></option>
							<?php
							}
							
							
							
							?>
						
						
						
							
						
						
						
						</select>
						</br>
					</div>
				</div>
					<div class="row">
					<div class="col-md-8">
                       <input type="text" name="fine_amt" placeholder="Amount*" class="form-control"  ><br>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-8">
					Date 
                       <input type="date" name="date"  class="form-control"  ><br>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-8">
                       <input type="text" name="remarks" placeholder="Remark*" class="form-control"  ><br>
					</div>
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
	
	$veh_no=$_POST['vehicle_no'];
  
	$amt=$_POST['fine_amt'];
	$rem=$_POST['remarks'];
	$dt=$_POST['date'];
	
    $ins="insert into fine(vehicle_no,fine_amt,date,remarks) values('$veh_no','$amt','$dt','$rem')";
	
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










