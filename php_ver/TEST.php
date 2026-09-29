<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="../..//css/style.css" type="text/css">
</head>
<body>
    <?php
        include_once 'index.php';

        $hostname = "127.0.0.1";
        $username = "pma";
        $password = "pmapass";
        $dbname = "FamityDB";

        // Create connection
        $conn = mysqli_connect($hostname, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
          die("<script>console.log('Connection failed: " . mysqli_connect_error() . "');</script>");
        }
        echo "<script>console.log('Connected successfully');</script>";

    ?>
</body>
</html>