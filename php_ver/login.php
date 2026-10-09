<?php // Fetching Database
include("sec.php");

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginUsername = $_POST['username'];
    $loginPassword = $_POST['password'];

    $sql = $conn->prepare("SELECT username FROM Customer WHERE username = ? AND password = ?");
    $sql->bind_param("ss", $loginUsername, $loginPassword);
    $sql->execute();
    $Result = $sql->get_result();

    if ($Result->num_rows > 0) {
        session_start();
        setcookie("username", $loginUsername, time() + (86400 * 30), "/");
        setcookie("password", $loginPassword, time() + (86400 * 30), "/");
        header("Location: test.php");
        exit;
    }

    $loginError = "Invalid username or password. Please try again.";
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
            <form method="post" action="login.php">
                <h1>Log In</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Log In</button>
                <p>Not registered? <a href="signup.php">Sign Up</a></p>
            </form>
            <?php
            if (isset($loginError)) {
                echo "<p>" . htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8') . "</p>";
            }
            ?>
        </div>
    </section>

    <?php include('accessibility.php'); ?>
    <?php include('footer.php'); ?>
</body>
</html>