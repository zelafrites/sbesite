<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmity</title>
    <link rel="stylesheet" href="../..//css/style.css" type="text/css">
</head>
<body>
    <?php
        include_once 'index.php';
    ?>

    <form class="contact" action="mailto:contact@farmity.com" method="post">
        <h1>Contact Us</h1>
        <label>Email</label><br>
        <input type="email" placeholder="Email">
        <br>
        <label>Phone</label><br>
        <input type="number" placeholder="Phone">
        <br>
        <select>
            <option value="general">General Enquiry</option>
            <option value="payment">Problems with payment</option>
            <option value="delivery">Problems with delivery</option>
            <option value="product">Problems with product</option> 
        </select>
        <br>
        <textarea placeholder="Ask me anything . . ."></textarea>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>