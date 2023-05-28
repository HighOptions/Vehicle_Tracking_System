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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
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
					<center><h2>Tracked Vehicles</h2><br></center>
						
						<form class="form-inline" method="POST">
						  <label for="email">Model:</label>
							<input type="text" name="model" placeholder="Enter Model">
						  <label for="pwd">No. Plate:</label>
							<input type="text" name="no" placeholder="Enter No. Plate">
						  
						  <button type="submit"name="submit">Submit</button>
						</form>
                        <table class="table table-striped table-bordered table-hover">
                           
                                <tr>
									<th>id</th>
									
                                    <th>model</th>
									
									<th>No. Plate</th>
									
									<th>Time</th>
									
									<th>Action</th>
									
                                </tr>
                            <?php
								session_start();
								include ("connection.php");
								
								if(isset($_POST['submit']))
								{
								$model=$_POST['model'];
								$no=$_POST['no'];

								if($no==""){
									$sel="SELECT * FROM `tracking` WHERE `model`='$model'";
								}
								elseif($model==""){
									$sel="SELECT * FROM `tracking` WHERE `no_plate` LIKE '%$no%'";
								}
								else{
									$sel="SELECT * FROM `tracking` WHERE `model`='$model' or `no_plate` LIKE '%$no%'";
								}

								
								//$sel="SELECT * FROM `tracking` WHERE `model`='$model' or `no_plate` ='$no'";
								//echo $sel;
								
								}
								else{
								$sel="SELECT * FROM `tracking`";
								}
									$res=mysqli_query($con,$sel);
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
									$a=trim($row['no_plate']);
									$sel="SELECT * FROM `vehicle` where model='$row[model]' and no_plate='$a'";
									$result = mysqli_query($con,$sel);
									// echo $sel."<br>";
									$row1=mysqli_fetch_array($result);
									$rows = mysqli_num_rows($result);
									//echo $rows."hgghghghghghghghghgh<br>";
									//echo $row1['time'];
							?>
									
								
                           
                                <tr>
									<td><?php echo $i?></td>
                                    
                                   <td><?php echo $row['model']?></td>
									
									<td><?php echo $row['no_plate']?></td>
									
									<td><?php echo $row['time']?></td>
									
									<?php
									
									if($rows>0)
									{
									?>
									<td>Valid</td>
									<?php
									}else{
									?>
									<td><i class="material-icons" style="font-size:30px;color:red">warning</i>Fake</td>
									<?php
									}
									?>
									
									
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