<?php 
session_start();
if (!isset($_SESSION["account_id"])){
  header("Location: CoverPage.php");
}
$title = "TradePoint :: Job History";
require('includes/header-system.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<div class="topic-heading">
  <h1><?php echo $_SESSION['user_first_name']?>'s Dashboard</h1>
</div>
<?php require('includes/nav-system.php');?>
</head>

<body>
  <a href="Logout.php">Sign Out</a>
</body>
</html>

