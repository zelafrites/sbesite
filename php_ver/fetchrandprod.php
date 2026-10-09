<?php
include("sec.php");

$conn = new mysqli($hostname, $username, $password, $dbname);

$sql = "SELECT * FROM Product ORDER BY RAND() LIMIT 3";
$pResults = $conn->query($sql);

include("fetchprod.php");

$conn->close();
?>
