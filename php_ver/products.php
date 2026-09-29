<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmity - Products</title>
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
        die("Connection failed: " . $conn->connect_error);
        }
        echo "<script>console.log('Connected successfully');</script>";
    ?>
    
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
                    <option value="ver">Verity</option>
                    <option value="fal">Falsity</option>
                    <option value="cru">Cruelty</option>
                </select>
            </div>
        </div>

        <div id="prodcont">
            <div class="prodcard">
                <img src="../../res/images/Verity.png" alt="Product Image"><br>
                <h4>Verity</h4>
                <p>Ask him anything</p>
                <h5>Price: £1.20</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="verity">
                    <input type="hidden"
                    name="price"
                    value="1.20">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="prodcard">
                <img src="../../res/images/Falsity.png" alt="Product Image">
                <h4>Falsity</h4>
                <p>Don't ask him anything</p>
                <h5>Price: £1.20</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="falsity">
                    <input type="hidden"
                    name="price"
                    value="1.20">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="prodcard">
                <img src="../../res/images/Cruelty.png" alt="Product Image">
                <h4>Cruelty</h4>
                <p>Just don't even talk to him</p>
                <h5>Price: £120</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="cruelty">
                    <input type="hidden"
                    name="price"
                    value="120.00">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="prodcard">
                <img src="../../res/images/Lovity.png" alt="Product Image"><br>
                <h4>Lovity</h4>
                <p>The one who loves you most</p>
                <h5>Price: £2.40</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="lovity">
                    <input type="hidden"
                    name="price"
                    value="2.40">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="prodcard">
                <img src="../../res/images/Obesity.png" alt="Product Image">
                <h4>Obesity</h4>
                <p>Feed him anything</p>
                <h5>Price: £0.40</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="obesity">
                    <input type="hidden"
                    name="price"
                    value="0.40">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
            <div class="prodcard">
                <img src="../../res/images/Curiosity.png" alt="Product Image">
                <h4>Curiousity</h4>
                <p>He's always curious about<br>everything</p>
                <h5>Price: £5.40</h5>
                <form action="basket.php">
                    <input type="hidden"
                    name="itemname"
                    value="curiousity">
                    <input type="hidden"
                    name="price"
                    value="5.40">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        </div>

    </section>
    
</body>
</html>