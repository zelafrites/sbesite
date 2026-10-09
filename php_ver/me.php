<?php 

if (!isset($_COOKIE["username"]) and !isset($_COOKIE["password"])) {
    header("Location: login.php");
    die();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style><?php include('css/style.css'); ?></style>
    <script src="scripts/script.js" defer></script>
    <script src="scripts/accessibility.js" defer></script>
</head>
<body>
    <?php include('header.php'); ?>
    <section id="container">
        <div class="subcontainer">
            <h1>Welcome, <?php echo htmlspecialchars($_COOKIE["username"], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p>Your password is "<?php echo htmlspecialchars($_COOKIE["password"], ENT_QUOTES, 'UTF-8'); ?>"</p>
        </div>
    </section>

    <?php include('accessibility.php'); ?>
    <?php include('footer.php'); ?>
</body>
</html>