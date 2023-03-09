<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ERP</title>
    <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  </head>
  <body>
    <div class="login">
      <div class="log-img">
        <span>
        <br>Login Admins Page
      </span>
      </div>
      <p>To Login enter username and Password</p>
      <form class="form" action="authenticate.php" method="post">
        <label for="Reg No">
          <i class="fas fa-user"></i>Username
        </label><br>
        <input class="log"  type="text" name="username" placeholder="username" id="username" required><br>
        <label for="password">
          <i class="fas fa-lock"></i>Password
        </label><br>
        <input class="log" type="password" name="password" placeholder="Password" id="password" required><br>
        <input class="sub" type="submit" value="Login">
      </form>
    </div>
  </body>
</html>