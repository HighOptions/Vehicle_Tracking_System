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
				
				
				<div id="printThis">
				
                    <div class="col-md-12">
                        <h3>View Vehicles</h3><br>
                        <table class="table table-striped table-bordered table-hover" ">
                           
                                <tr>
									<th>id</th>
                                    
                                    <th>name</th>
									
                                    <th >model</th>
								
								    <th>color</th>
									
									<th>No. Plate</th>
									
									<th>Image</th>
									
                                </tr>
                            <?php
								session_start();
								include ("connection.php");
								
									$sel="SELECT * FROM `vehicle`";
									$res=mysqli_query($con,$sel);
									$i=1;
									while($row=mysqli_fetch_array($res))
								{

							?>
									
								
                           
                                <tr>
									<td><?php echo $i?></td>
                                    
                                   <td><?php echo $row['name']?></td>
                                    
									<td ><?php echo $row['model']?></td>
									
									<td><?php echo $row['color']?></td>
									
									<td><?php echo $row['no_plate']?></td>
									
									<td ><?php echo "<img width='250px' height='150px' src='uploads/$row[image]'>"?></td>
                                </tr>
                           
                      
							<?php
								$i++;
								}
								
								?>
						  </table>
						</div>
						
							</div>
						
						
      
						
					</div>	
				
                 </div>
				</div>
         </body>
</html>		 