
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    <style>
      <?php include "register.css" ?>
    </style>
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="top-content">
          <h1>Create your Account</h1>
          <p>You must create and account to gain access</p>
          <div class="forms">
             <form action="process-signup.php" method="post" id="signup" novalidate>
              <div class="input-field">
                <label for="username">Username</label><br />
                <input
                  type="text"
                  placeholder="Enter your username"
                  required
                  name="username"
                /><br />
              </div>
              <div class="input-field">
                <label for="email">Email</label><br />
                <input
                  type="email"
                  placeholder="Enter your email address"
                  required
                  name="email"
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
                <label for="repeat">Repeat password</label><br />
                <input
                  type="password"
                  placeholder="Repeat your password"
                  required
                  name="repeat"
                /><br />
              </div>
              <div class="button-container">
                <button class="btn" name="submit">Signup</button>
                <p class="text">
                  Already have an account?
                  <a href="signup.php">Sign in</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
