<?php
  session_start()
  ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login and Signup</title>
</head>

<body>
  <div class="container">
    <form action="index.php" id="loginForm" class="form" method="post">
      <h2>Sign up</h2>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php

  function login_alert() {
    echo"<script>alert('Invalid credentials')</script>";
  }
    if(isset($_POST["login"])){


      if($_POST["username"] == "Evan" && $_POST["password"] == "Lavoie"){
        $_SESSION["username"] = "Evan Lavoie";
        header("location: home.php");
      } else
      if($_POST["username"] == "Markos" && $_POST["password"] == "Magaoay"){
        $_SESSION["username"] = "Markos Magaoay";
        header("location: home.php");
      } else
      if($_POST["username"] == "Joaquin" && $_POST["password"] == "Juanico"){
        $_SESSION["username"] = "Joaquin Juanico";
        header("location: home.php");
      } else
      {
        login_alert();
      } 






    }
    ?>