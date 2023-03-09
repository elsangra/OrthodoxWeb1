<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
$stmt = $con->prepare('SELECT fname, idn FROM student WHERE reg = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['reg']);
$stmt->execute();
$stmt->bind_result($fname, $idn);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student details</title>
		<link href="../../css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<body class="loggedin">
		<nav id="nav" class="navbar navbar-light bg-light">
	  		
	  	<h1>Student details</h1>
		</nav>

		 <table align="center" border="1px" style="width:900px; line-height:50px;">
      <tr>
              <th>Full Name</th>
              <th>Reg No</th>
              <th>Phone</th>
              <th>ID No</th>
              <th>DOB</th>
              <th>Guardian</th>
              <th>Location</th>
              <th>KCSE Grade.</th>
              <th>Course</th>
              <th>Sponsorship Type</th>
      </tr>

    <?php  
    include('../connect.php');
      $result = mysqli_query($con, "SELECT * FROM student ORDER BY reg ASC"); 
      while($row = mysqli_fetch_assoc($result)) 
      {
    ?>
          <tr>
          <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['reg']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['idn']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['guardian']; ?></td>
                  <td><?php echo $row['location']; ?></td>
                  <td><?php echo $row['kcse']; ?></td>
                  <td><?php echo $row['course']; ?></td>
                  <td><?php echo $row['sponsorship']; ?></td>
          </tr>

    <?php
        }
    ?>
    </table>
   </div>

   <button><a href="registrar.php">BACK</a></button>
	</body>
</html>