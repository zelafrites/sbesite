<?php
// Display da query
if ($pResults->num_rows > 0) {
    while($row = $pResults->fetch_assoc()) {
        echo '
        
        <div class="prodcard">
            <img src="res/images/'.$row["Image"].'.png" alt="Product Image"><br>
            <h4>'.$row["Title"].'</h4>
            <p>'.$row["Description"].'</p>
            <h5>Stock: '.$row["Stock"].'</h5>
            <h5>Price: £'.number_format($row["Price"], 2).'</h5>
            <form action="basket.php" method="post">

                <!-- Product ID -->
                <input type="hidden"
                name="ProductID"
                value="'.$row["ProductID"].'">

                <!-- Title -->
                <input type="hidden"
                name="Title"
                value="'.$row["Title"].'">

                <!-- Price -->
                <input type="hidden"
                name="Price"
                value="'.$row["Price"].'">

                <!-- Quantity -->
                <input type="hidden"
                name="Quantity"
                value="1">

                <button type="submit" name="add">Add to Cart</button>
            </form>
        </div>

        ';
    }
}
?>