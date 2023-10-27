<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Furniture</title>
        <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="assets/css/style-regis.css">
        <style>
      .error-message {
        font-size: 20px;
        color: red;
        text-align: center;
      }
    </style>
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form id="form1" name="form1" method="post" action="--Registersuccess.php">
      <div class="input-box">
        <input type="text" name="First_name" id="First_name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="Member_user" id="Member_user" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="Member_pass" id="Member_pass" placeholder="Create password" required>
      </div>
      <div class="input-box">
      <input type="password" name="Confirm_pass" id="Confirm_pass" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
      <input type="Submit" value="Register Now" onclick="validatePassword()">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
      <p class="error-message" id="password-mismatch-error"></p>
    </form>
  </div>
  <script>
      function validatePassword() {
        var password1 = document.getElementById("Member_pass").value;
        var password2 = document.getElementById("Confirm_pass").value;
        var errorMessage = document.getElementById("password-mismatch-error");

        if (password1 !== password2) {
          errorMessage.innerText = "*Password do not match.*";
          event.preventDefault(); // หยุดการส่งฟอร์ม
        } else {
          errorMessage.innerText = "";
        }
      }
    </script>
</body>
</html>

