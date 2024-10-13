<?php 
session_start();
$title = "TradePoint :: Login";
require('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en-GB">
<head>
</head>
<body>
  <div class="login-container">
    <h1>TradePoint - Login</h1>

    <?php 

      if (isset($_POST["login"])){
        $email_address = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM accounts WHERE email_address = '$email_address'";
        $email_result= mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($email_result, MYSQLI_ASSOC);
        if($user){
          if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION['account_id']=$user['account_id'];
            $_SESSION['user_first_name']= $user['first_name'];
            $_SESSION['user_surname']=$user['surname'];
            header("Location: pages-system/Home.php");
            die();

          }else{
            echo "<p class='error_message'>Invalid Password.</p>";
          }
        }else{
          echo "<p class='error_message'>Email not found.</p>";
        }
      }

    ?>

    <form action="Login.php" method="post">
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="login" name="login">
    </form>
    <p>New User? <a href="Register.php">Create New Account</a></p>
  </div>
</body>

</html>

