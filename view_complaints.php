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
                        <h3>Complaints</h3><br>
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <th>UserID</th>
                                <th>Remark</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Missing Location</th>
                                <th>Verify</th>
                            </tr>
                            <?php
                                session_start();
                                include("connection.php");

                                $sel = "SELECT * FROM complaints";
                                $res = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($res)) {
                            ?>
                            <tr>
                                <td><?php echo $row['user_id']; ?></td>
                                <td><?php echo $row['remark']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo "<img width='250px' height='150px' src='../User/images/$row[photo]'>"; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td><?php echo $row['missing_location']; ?></td>
                                <td><a href="verify.php?id=<?php echo $row['id']; ?>">Verify</a></td>
                            </tr>
                            <?php
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