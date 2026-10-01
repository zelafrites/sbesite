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
$sql = 'SELECT * FROM Navigation';
$results = $conn->query($sql);
?>

<nav>
    <ul class="site-nav">

    <?php
    // Display da query
        if ($results->num_rows > 0) {
            while($row = $results->fetch_assoc()) {
                echo '<li><a href="'.$row["mlink"].'">'.$row["mlabel"].'</a></li>';
            }
        }
    ?>

        <li><div>
            <a href="basket.php"><img src="res/images/shopping-cart.png" alt="Cart"></a>
            <a href="me.php"><img src="res/images/default_photo.jpg" alt="User" class="pfp"></a>
        </div></li>
    </ul>
</nav>