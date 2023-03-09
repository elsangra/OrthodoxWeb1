<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registar's page</title>
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
    </head>
    <body>
        <div class="login">
            <div class="log-img">
             <span>
                <br>Registrar Login
            </span>
            </div>
            <p>To Login enter your email and Password</p>
            <form class="form" action="action.php" method="post">
                <label for="Reg No">Email</label><br>
                <input class="log"  type="text" name="Email" placeholder="Email" id="username" required><br>

                <label for="password">Password</label><br>
                <input class="log" type="password" name="Password" placeholder="Password" id="password" required><br>

                <input class="sub" type="submit" value="Login">

            </form>
        </div>
    </body>
</html>