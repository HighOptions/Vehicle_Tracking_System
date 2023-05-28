<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vehicle Searching</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Vehicle Searching</h1>
    <p id="status">Searching...</p>
    <script>
        $(document).ready(function() {
            // Start the Python script
            $.ajax({
                url: 'search_vehicle.php',
                type: 'GET',
                success: function() {
                    // The script has finished executing
                    $('#status').text('Search complete!');
                }
            });

            // Periodically check the status of the script
            setInterval(function() {
                $.ajax({
                    url: 'check_status.php',
                    type: 'GET',
                    success: function(data) {
                        $('#status').text(data);
                    }
                });
            }, 1000);
        });
    </script>
</body>
</html>
