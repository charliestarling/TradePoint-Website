<?php 
session_start();
if (!isset($_SESSION["account_id"])){
  header("Location: CoverPage.php");
}
$title = "TradePoint :: Home";
require_once('includes/header-system.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<div class="topic-heading">
  <h1><?php echo $_SESSION['user_first_name']?>'s Dashboard</h1>
</div>
<?php require_once('includes/nav-system.php');?>
</head>

<body>
  <a href="Logout.php">Sign Out</a>
</body>
</html>

<!-- TO DO  -->
<!-- For some reason, the server can't find some of the pages after logging in, -->
<!-- I suspect it's something to do with the directories / relative paths to each -->
<!-- file. I get an error 500 each time. I'm suspecting the includes & require methods too -->
<!-- Got to go to bed. It's just hit 04:10 on 13/10/24 -->