<?php 
session_start();
if (!isset($_SESSION["account_id"])){
  header("Location: coverPage.php");
}
$title = "TradePoint :: Home";
require('includes/header.php');
?>

