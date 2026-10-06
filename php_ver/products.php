<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmity - Products</title>
    <style><?php include("css/style.css")?></style>
    <script src="scripts/script.js" defer></script>
    <script src="scripts/accessibility.js" defer></script>
</head>

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
$sql = 'SELECT * FROM Product';
$pResults = $conn->query($sql);
?>

<body>
    <?php include("header.php"); ?>

    <section id="prodfilter">

        <div id="filtercont">
            <h3>Filters</h3>
            <span>_____</span>
            <div class="filter">
                <label for="price">Price:</label>
                <select id="price" name="price">
                    <option value="asc">Ascending</option>
                    <option value="des">Descending</option>
                </select>
            </div>
            <div class="filter">
                <label for="category">Category:</label>
                <select id="category" name="category">
                    <option value="all">All</option>
                    <option value="vcu">Verity Cinematic Universe</option>
                    <option value="none">None</option>
                </select>
            </div>
        </div>

        <div id="prodcont">
            <?php include("fetchprod.php"); ?>
        </div>

    </section>

    <?php include("accessibility.php"); ?>
    <?php include("footer.php"); ?>
</body>
</html>