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
$productResults = $conn->query($sql);
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
                </select>
            </div>
        </div>

        <div id="prodcont">
            <?php
            // Display da query
            if ($productResults->num_rows > 0) {
                while($row = $productResults->fetch_assoc()) {
                    echo '
                    
                    <div class="prodcard">
                        <img src="res/images/'.$row["Image"].'.png" alt="Product Image"><br>
                        <h4>'.$row["Title"].'</h4>
                        <p>'.$row["Description"].'</p>
                        <h5>Stock: '.$row["Stock"].'</h5>
                        <h5>Price: £'.$row["Price"].'</h5>
                        <form action="basket.php">
                            <input type="hidden"
                            name="itemname"
                            value="'.$row["Title"].'">
                            <input type="hidden"
                            name="price"
                            value="'.$row["Price"].'">
                            <button type="submit">Add to Cart</button>
                        </form>
                    </div>

                    ';
                }
            }
            ?>
        </div>

    </section>

    <?php include("accessibility.php"); ?>
    <?php include("footer.php"); ?>
</body>
</html>