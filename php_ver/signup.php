<?php // Fetching Database
include("sec.php");

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $signupUsername = $_POST['username'];
    $signupEmail = $_POST['email'];
    $signupPassword = $_POST['password'];

    $sql = $conn->prepare('INSERT INTO Customer (username, email, password) VALUES (?, ?, ?)');

    $sql->bind_param('sss', $signupUsername, $signupEmail, $signupPassword);
    if ($sql->execute()) {
        header("Location: login.php");
        exit;
    } else {
        $signupError = "Error: " . $sql->error;
    }

    $signupError = "Invalid username or password. Please try again.";
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
            <form method="post" action="signup.php">
                <h1>Sign Up</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="login.php">Log In</a></p>
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