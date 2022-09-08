<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: mainweb.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="signup.css" />
    <style>
      <?php include "signup.css" ?>
    </style>
    <title>Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="top-content">
          <h1>Welcome</h1>
           <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
          <p>Please enter your details to continue</p>
          <div class="forms">
            <form action="" method="POST">
              <div class="input-field">
                <label for="email">Email</label><br />
                <input
                  type="email"
                  placeholder="Enter your email"
                  required
                  name="email"
                  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"
                /><br />
              </div>
              <div class="input-field">
                <label for="password">Password</label><br />
                <input
                  type="password"
                  placeholder="Enter your password"
                  required
                  name="password"
                /><br />
              </div>
              <div class="input-field">
                <div class="button">
                  <button name="submit" class="btn">Login</button>
                </div>
                <p class="text">
                  Don't have an account?
                  <a href="register.php">Register</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
