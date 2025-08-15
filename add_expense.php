<?php
include 'db.php';
$date = $_POST['date'];
$category = $_POST['category'];
$amount = $_POST['amount'];

$conn->query("INSERT INTO expenses (date, category, amount) VALUES ('$date', '$category', '$amount')");
header("Location: index.php");
?>