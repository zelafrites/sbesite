<?php
session_start();
//initalise cart
if(!isset($_SESSION['Product'])){
    $_SESSION['Product'] = [];
}
 
//add item
if(isset($_POST['add'])){
    $id = (int)$_POST['ProductID'];
 
    if(isset($_SESSION['Product'][$id])){
        $_SESSION['Product'][$id]['quantity']++;
    } else{
        $_SESSION['Product'][$id] = [
            "Title" => $_POST['Title'],
            "Price" => $_POST['Price'],
            "Quantity" => $_POST['Quantity']
        ];
    }
}
 
//remove item
if(isset($_GET['remove'])){
    $id = $_GET['remove'];
 
    unset($_SESSION['Product'][$id]);
    header("Location: basket.php");
    exit;
}

?>

<html lang="en">
<body>

<style><?php include('css/style.css'); ?></style>

<?php include('header.php'); ?>

<h2>Your Cart</h2>

<?php if (!empty($_SESSION['Product'])): ?>

<table cellpadding="10">
    <tr>
        <th>Item Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>

<?php
$total = 0;
foreach ($_SESSION['Product'] as $id => $item):
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

<?php include('accessibility.php'); ?>
<?php include('footer.php'); ?>
</body>
</html>