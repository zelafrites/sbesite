<?php // Fetching Database
include("sec.php");

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("<script>console.log('Connection failed: " . mysqli_connect_error() . "');</script>");
}
echo "<script>console.log('Connected successfully');</script>";

// Begin Query
$sql = 'SELECT * FROM NavigationF';
$results = $conn->query($sql);
?>

<?php
// Display da query
    if ($results->num_rows > 0) {
        while($row = $results->fetch_assoc()) {
            echo '<li><a href="'.$row["mlink"].'">'.$row["mlabel"].'</a></li>';
        }
    }
?>