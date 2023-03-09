<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login2.php');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'orthodox_db';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT dob, idn, citizen, gender, tel, marital, email  FROM student WHERE fname = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['fname']);
$stmt->execute();
$stmt->bind_result($idn, $dob, $citizen, $gender, $tel, $marital, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Students Page</title>
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
		+<link rel="stylesheet" type="text/css" href="../../css/style.css"> 

	<nav id="nav" class="navbar ">
		<div id="log">
			<a href="index.php" class="pull-left visible-md visible-lg">
				<div id="logo-img" alt="Logo Image"></div>
			</a>
		</div>
		<div id="title">
			<h3>ORTHODOX ARCHDIOCESE OF NAIROBI</h3>
		  	<h1>ORTHODOX COLLEGE OF AFRICA & TTC</h1>
		  	<h5>EDUCATION & SERVICE</h5>
		</div>
		
	</nav>
	<div id="top" class=>
		<div id="collapsable-nav" class="collapse navbar-collapse">
						<ul id="span"  class="navbar-nav ">
							<li class=" active">
								<a href="#">
									<span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Student Details</a>
							</li>
							<li>
								<a href="#">
									<span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs">Student Attendance</a>
							</li>
							<li class=" active">
								<a href="#">
									<span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Student Results</a>
							</li>
							<li class=" active">
								<a href="#">
									<span class="glyphicon glyphicon-home"></span><br class="hidden-xs">Fees</a>
							</li>
							<li>
								<a href="elogin.php">
									<span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs">E-learning</a>
							</li>
							
							<li>
								<a href="../../logout.php"><span class="glyphicon glyphicon-home"></span><br>
									<i class="fas fa-sign-out-alt"></i>Logout</a>
								<a href="#">
							</li>
							   
						</ul>
					</div>
	</div>

		<div class="content">
			<div>
				<p>Your account details are below:</p>
				<table border="2px">
					<tr>
						<td>Your Name is :</td>
						<td><?=$_SESSION['fname']?></td>
					</tr>
					<tr>
						<td>Reg No:</td>
						<td><?=$dob?></td>
					</tr>
					<tr>
						<td>ID No:</td>
						<td><?=$idn?></td>
					</tr>
					<tr>
						<td>Citizen:</td>
						<td><?=$citizen?></td>
					</tr>
					<tr>
						<td>Gender :</td>
						<td><?=$gender?></td>
					</tr>
					<tr>
						<td>Marital Status:</td>
						<td><?=$marital?></td>
					</tr>
					<tr>
						<td>Phone Number:</td>
						<td><?=$tel?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>