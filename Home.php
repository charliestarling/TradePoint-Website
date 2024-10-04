<?php 
session_start();
if (!isset($_SESSION["account_id"])){
  header("Location: coverPage.php");
}
$title = "TradePoint :: Home";
require('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <p><a href="Logout.php">Log out</a></p>
</head>
<body>
    
</body>
</html>

