<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmity - Home</title>
    <style><?php include("css/style.css")?></style>
    <script src="scripts/script.js" defer></script>
    <script src="scripts/accessibility.js" defer></script>
    <script src="scripts/products_refresh.js" defer></script>
</head>
<body onload="loadTheme()">
<?php
    include("header.php");
?>
    <section id="container">
        <div class="subcontainer">
            <h1>Welcome to Farmity!</h1>
            <p>Check out some of our produce.</p>
        </div>

        <div id="container">
            <?php
                include("sec.php");

                // Create connection
                $conn = new mysqli($hostname, $username, $password, $dbname);

                $sql = "SELECT * FROM Product order by RAND() LIMIT 3";
                $pResults = $conn->query($sql);

                echo '<div id="randprodcont">';
                include("fetchrandprod.php");
                echo '</div>';
            ?>
        </div>
    </section>

<?php
    include("accessibility.php");
    include("footer.php");
?>
</body>
</html>