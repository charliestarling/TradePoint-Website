<?php 
session_start();
if (!isset($_SESSION["account_id"])) {
  header("Location: CoverPage.php");
  exit(); // Use exit() after header redirects
}
$title = "TradePoint :: Home";
require('includes/header-system.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Include your head elements here -->
</head>
<body>
  <div class="topic-heading">
    <h1>
      <?php echo isset($_SESSION['user_first_name']) ? htmlspecialchars($_SESSION['user_first_name']) : 'User'; ?>'s Dashboard
    </h1>
  </div>
  <?php require_once('includes/nav-system.php');?>

  <a href="Logout.php">Sign Out</a>
</body>
</html>

<!-- TO DO  -->
<!-- For some reason, the server can't find some of the pages after logging in, -->
<!-- I suspect it's something to do with the directories / relative paths to each -->
<!-- file. I get an error 500 each time. I'm suspecting the includes & require methods too -->
<!-- Got to go to bed. It's just hit 04:10 on 13/10/24 -->