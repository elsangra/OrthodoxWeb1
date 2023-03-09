<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>admin's page</title>
        <link rel="stylesheet" type="text/css" href="../pages/css/styles.css">
    </head>
    <body>
        <div class="login">
            <div class="log-img">
             <span>
                <br>Admin Login
            </span>
            </div>
            <p>To Login enter your email and Phone number as Password</p>
            <form class="form" action="action.php" method="post">
                <label for="email">Email</label><br>
                <input class="log"  type="email" name="email" placeholder="Email" id="username" required><br>

                <label for="password">Password</label><br>
                <input class="log" type="password" name="Password" placeholder="Password" id="password" required><br>

                <input class="sub" type="submit" value="Login">

            </form>
        </div>
    </body>
</html>