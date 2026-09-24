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

        $servername = "localhost";
        $username = "pma";
        $password = "pmapass";
        $dbname = "db_products";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("<script>console.log('Connection failed: " . $conn->connect_error . "');</script>");
        }
        echo "<script>console.log('Connected successfully');</script>";

        $sql = "INSERT INTO db_products.verity (Title)
        VALUES ('Verity')";

        if ($conn->query($sql) === TRUE) {
          echo "<script>console.log('New record created successfully');</script>";
        } else {
          echo "<script>console.log('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }

        $name = "SELECT FROM db_products.verity (Title)";

        echo "<h1>" . $name . "</h1>";
    ?>
</body>
</html>