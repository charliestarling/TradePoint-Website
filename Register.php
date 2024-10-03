<?php 
session_start();
$title = "TradePoint :: Register";
require('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <div class="login-container" id="registerLogin">

    <?php 
    if (isset($_POST["submit"])){
      $first_name= $_POST["forename"];
      $surname= $_POST["surname"];
      $email_address= $_POST["email"];
      $password= $_POST["password"];
      $errors = array();
      
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $sql_check_email= "SELECT * FROM users WHERE email_address = '$email_address'";
      $email_result= mysqli_query($conn, $sql_check_email);
      $email_row_count= mysqli_num_rows($email_result);
      if ($email_row_count>0){
        array_push($errors, "Email already exists!");
      }

      if (count($errors)>0){
        foreach($errors as $error){
        echo "<p class='error_message'>ERROR: $error.</p>";
        }
      }
      else{
        $sql = "INSERT INTO accounts (first_name, surname, email_address, password)
        VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepare_stmt = mysqli_stmt_prepare($stmt, $sql);
        if($prepare_stmt){
          mysqli_stmt_bind_param($stmt, "ssss", $first_name, $surname, $email_address, $passwordHash);
          mysqli_stmt_execute($stmt);
          echo "<p>Registered Successfully</p>";
        } else{
          die("Something went wrong.");
        }
      }   
    }   
    ?>

    <h1>TradePoint - Register New Account</h1>
    <form action="Register.php" method="post">
      <input type="text" id="register_first_name" name="forename" placeholder="First Name" required>
      <input type="text" id="register_surname" name="surname" placeholder="Surname" required>

      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="password" id="confirm_password" name="confirm_password" onkeyup='check();' placeholder="Confirm Password" required>
      
      <p id="confirm_message"></p>

      <input type="submit" value="Sign Up" name="submit">
    </form>
    <p>Already have an account? <a href="Login.php">Sign In</a></p>
  </div>

</body>
</html>
