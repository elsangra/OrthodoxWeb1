<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ERP</title>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	</head>
	<body>
		<div class="login">
			<div class="log-img">
				<img src="../../images/lo.jpg"> <span>
				<br>Welcome
			</span>
			</div>
			<p>To Login enter the Student Regestration Number and <br> ID Number as Password</p>
			<form class="form" action="login2_au.php" method="post">
				<label for="Reg No">
					<i class="fas fa-user"></i>Full name
				</label><br>
				<input class="log"  type="text" name="fname" placeholder="full name" id="username" required><br>
				<label for="password">
					<i class="fas fa-lock"></i>Password
				</label><br>
				<input class="log" type="password" name="idn" placeholder="Password" id="password" required><br>
				<input class="sub" type="submit" value="Login">

			</form>
		</div>
	</body>
</html>