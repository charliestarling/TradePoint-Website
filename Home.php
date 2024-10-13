<?php 
session_start();
if (!isset($_SESSION["account_id"])){
  header("Location: CoverPage.php");
}
$title = "TradePoint :: Home";
require('includes/header-system.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<div class="topic-heading">
  <h1><?php echo $_SESSION['user_first_name']?>'s Dashboard</h1>
</div>
</head>

<body>
  <a href="Logout.php">Sign Out</a>
</body>
</html>

