<!DOCTYPE html>
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
                        
                        <form enctype="multipart/form-data" method="POST">
                            <div class="row">
                                
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="Location"><h3>Search via location:<h3><br> </label>
                                    
                                    <input type="text" class="form-control" name="location" id="location" placeholder="Missing Vehicle Location"><br>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Search"><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    // (existing PHP code remains the same)
                    if(isset($_POST['submit']))
                    {
                        // (existing code for handling image upload)
                        
                        // Handle location input and display videos
                        if(isset($_POST['location'])) {
                            $location = $_POST['location'];
                            $videos = glob($location . "/*.mp4");
                            echo "<div class='row'>";
                            echo "<div class='col-md-12'>";
                            echo "<h3>Videos</h3>";
                            echo "<form method='POST'>";
                            echo "<select name='selected_video' class='form-control'>";
                            foreach($videos as $video) {
                                echo "<option value='" . $video . "'>" . basename($video) . "</option>";
                            }
                            echo "</select><br>";
                            echo "<input type='submit' class='btn btn-primary btn-lg' name='run_python' value='Run'>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";
                        }
                        
                        // (existing code for running Python script)
                    }

                    // Run Python script with the selected video
                    if(isset($_POST['run_python'])) {
                        $selected_video = $_POST['selected_video'];
                        $python = `python yolov7/detect_num.py --source $selected_video --weights yolov7/best.pt`;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>