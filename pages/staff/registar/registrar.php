<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orthodox College of Africa</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/styles.css"> 
</head>
<body>
	<!-- HEADER -->
		<div id="top" class=>
		<div id="collapsable-nav" class="collapse navbar-collapse">
						<ul id="span"  class="navbar-nav ">
						<li class=" active">
                                <a href="studentdetails.php">
                                    <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Student details</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs">Student Attendance</a>
                            </li>
                            <li>
                                <a href="results.php">
                                    <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">Results</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs">E-Learning</a>
                            </li>

                            <li>
                                <a href="results.php">
                                    <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">Finance</a>
                            </li>
                            <li>
                                <a href="user.php">
                                    <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs">Add Users</a>
                            </li>
                            <li>
                                 <a href="../index.html">
                                    <span class="glyphicon glyphicon-phone-alt"></span><br class="hidden-xs">Logout</a>
                            </li>
						</ul>
					</div>
	</div>
	
	<!-- END HEADER -->

	    <table align="center" bordercolor = "green" bgcolor = "orange" border="1px" cellpadding = "5" cellspacing = "5" >
      <tr>
              <th>Full Name</th>
              <th>Date of Birth</th>
              <th>Citizen</th>
              <th>Country of Birth</th>
              <th>Country of Residence</th>
              <th>ID/Passport No</th>
              <th>Gender</th>
              <th>Marital</th>
      </tr>

    <?php  
    include('../../db/connect.php');
    session_start();
      $result = mysqli_query($con, "SELECT * FROM student ORDER BY fname ASC"); 
      while($row = mysqli_fetch_assoc($result)) 
      {
    ?>
          <tr>
          <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['citizen']; ?></td>
                  <td><?php echo $row['cob']; ?></td>
                  <td><?php echo $row['cor']; ?></td>
                  <td><?php echo $row['idn']; ?></td>
                  <td><?php echo $row['gender']; ?></td>
                  <td><?php echo $row['marital']; ?></td>
          </tr>

    <?php
        }
    ?>
    </table>
   </div>
    
</body>
</html>