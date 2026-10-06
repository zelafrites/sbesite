<?php
session_start();

// Initialize cart
if (isset($_SESSION['cart'])) {
    // Instantiate an empty session
    $_SESSION['cart'] = [];
}

// Add item
if (isset($_POST['add'])) {
    $id = (int)$_POST['ProductID'];

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['Quantity']++;
    } else {
        $_SESSION['cart'][$id] = [
            "Title" => $_POST['Title'],
            "Price" => $_POST['Price'],
            "Quantity" => 1
        ];
    }
}

// Remove item
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];

    unset($_SESSION['cart'][$id]);
    header("Location: products.php");
    exit;
}

echo "<h1>Cart: " . json_encode($_SESSION['cart']) . "</h1>";

?>

<html lang="en">
<body>

<style><?php include('css/style.css'); ?></style>

<h2>Your Cart</h2>

<?php if (!empty($_SESSION['cart'])): ?>

<table cellpadding="10">
    <tr>
        <th>Item Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>

<?php
$total = 0;
foreach ($_SESSION['cart'] as $id => $item):
    $itemTotal = $item['Price'] * $item['Quantity'];
    $total += $itemTotal;
?>

<tr>
    <td><?= $item['Title']; ?></td>
    <td>£ <?= number_format($item['Price'], 2); ?></td>
    <td><?= $item['Quantity']; ?></td>
    <td>£ <?= number_format($itemTotal, 2) ?></td>
    <td><a href="basket.php?remove=<?php echo $id; ?>">Remove</a></td>
</tr>

<?php endforeach; ?>

<tr>
    <td colspan="3">Total:</td>
    <td colspan="2">£ <?= number_format($total, 2) ?></td>
</tr>

</table>

<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>

<a href="products.php">Continue Shopping</a>
</body>
</html>