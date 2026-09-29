<?php

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

if ($results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
        echo '<li><a href="'.$row["mlink"].'">'.$row["mlabel"].'</a></li>';
    }
}

// Show the web content

echo '
<body onload="loadTheme()">
    <header>
            <a href="index.php"><img src="res/images/logo.png" alt="Farmity Logo" class="logo"></a>
            <div>
                <input type="text" placeholder="Search...">
                <button>🔍</button>
            </div>
            <button class="menu-toggle" aria-label="Open menu" aria-expanded="false">
            ☰
            </button>
            <nav>
                <ul class="site-nav">
                    <li><b><a href="index.php">Home</a></b></li>
                    <li><b><a href="products.php">Products</a></b></li>
                    <li><div>
                        <a href="basket.php"><img src="res/images/shopping-cart.png" alt="Cart"></a>
                        <a href="me.php"><img src="res/images/default_photo.jpg" alt="User" class="pfp"></a>
                    </div></li>
                </ul>
            </nav>
    </header>

    <section class="accessibility-box" id="access_container">
        <h2>Accessibility Options</h2>
        <button onclick="themeSwitch()" id="theme-switch-button">Toggle Theme (current: light)</button>
        <div>
            <h3>Font Sizes</h3>
            <button onclick="augmentFontSize(5)">+</button>
            <button onclick="resetFontSize()">RESET</button>
            <button onclick="augmentFontSize(-5)">-</button>
        </div>
        <div>
            <h3>Font Family</h3>
            <select id="font-family-select" onchange="changeFontFamily(this.value)">
                <option value="CanvaSans, sans-serif">CanvaSans</option>
            </select>
        </div>
    </section>

    <footer>
        <a href="index.html">
            <img src="res/images/Verity.png" alt="Verity Logo">
        </a>
        <ul>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><button id="access_btn" onclick="initAccessibility()"><img src="res/images/accessibility.png" alt="Accessibility"></button></li>
        </ul>
    </footer>
</body>';

?>