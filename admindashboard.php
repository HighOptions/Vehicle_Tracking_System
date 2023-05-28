<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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


<style>
.box {
height:140px;
width:330px;

padding-top:60px;
padding-right:30px;
padding-bottom:30px;
padding-left:30px;
background-color:#5274BD;
border-radius:10px;
color:white;


margin-top:80px;
margin-right:30px;
margin-bottom:30px;
margin-left:30px;

font-size:17px;
}

</style>


<body>
    
        <?php
		 include("sidebar.php");
		?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>MVD DASHBOARD</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                
				
				
			
				<div class="container-fluid">
				 <div class="row">
                    
					<div class=" col-lg-4 col-md-12 box">
                     
						  <a href="search.php" class="box">Search Vehicle</a>
                         </div>

						
                   <div class=" col-lg-4 col-md-12 box">
                     
						  <a href="view_complaints.php" class="box">View Complaints</a>
                         </div>
						 
						  <div class=" col-lg-4 col-md-12 box">
                        <a href="add_vehicles.php" class="box">Add Vehicles</a>
						 </div>
						 
						  <div class=" col-lg-4 col-md-12 box">
                        <a href="view_vehicles.php" class="box">View Vehicles</a>
						 </div>
						 
						 <div class=" col-lg-4 col-md-12 box">
                        <a href="tracked_vehicles.php" class="box">Tracked Vehicles</a>
						 </div>
						
 </div>
                       
						
                       
                       
                       
                     </div>

                </div>
     
            </div>
			
			
			
			
	
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
