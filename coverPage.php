<?php 
// session_start();
// if (isset($_SESSION["user_role"])){
//   if ($user['user_role']=='Admin'){
//     header("Location: a_home.php");
//   } elseif ($user['user_role']=='Reception'){
//     header("Location: r_home.php");
//   } elseif ($user['user_role']=='Patient'){
//     header("Location: p_home.php");
//   } else {
//     header("Location: m_home.php");
//   }
// }
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <div class="login-container" id="registerLogin">
    <h1>HMS - Register New Account</h1>
    <form action="register.php" method="post">
      <input type="name" id="register_first_name" name="forename" placeholder="First Name" required>
      <input type="name" id="register_surname" name="surname" placeholder="Surname" required>

      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="password" id="confirm_password" name="confirm_password" onkeyup='check();' placeholder="Confirm Password" required>
      
      <p id="confirm_message"></p>

      <input type="text" name="address" placeholder="Street Address" required>
      <input type="text" name="postcode" placeholder="Post Code" required>

      
      <label for="role">Select Role:</label>
      <select id="role" name="role">
        <option value="Patient">Patient</option>
        <option value="Reception">Receptionist</option>
        <option value="Medical">Medical Staff</option>
        <option value="Admin">Administrator</option>
      </select>

      <input type="submit" value="Sign Up" name="submit">
    </form>
    <p>Already have an account? <a href="login.php">Sign In</a></p>
  </div>

</body>
</html>
