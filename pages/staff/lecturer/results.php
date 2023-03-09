<?php  
		require('../../../db/connect.php');

		if (isset($_POST['submit'])) {
		$reg=$_POST['reg'];
		$fname=$_POST['fname'];
		$subject=$_POST['subject'];
		$semester=$_POST['semester'];
		$marks=$_POST['marks'];

		$query="insert into results(reg,fname,subject,semester,marks)values('$reg','$fname','$subject','$semester','$marks')";
		$run=mysqli_query($con,$query);
		if ($run) {
		echo "<script>alert('successfully Added the Marks ')</script>";
		}
		else{
			echo "nosomething went wrong";
		}
	}
?>

<!DOCTYPE html>
<html>
  <title>Results</title>
  <!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/icbs_logo.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
		
  <body>
  	<nav id="nav" class="navbar ">
		<div id="log">
		</div>
		<div id="title">
		  	<h1>ORTHODOX COLLEGE OF AFRICA & TTC</h1>
		</div>
		
	</nav>
    
	 <div class="row w-10">
    <button class="show-btn button-show ml-auto">
      <i class="fa fa-bars py-1" aria-hidden="true"></i>
    </button> 
  </div>
    <nav id="sidebarMenu" class="">
			<div class="col-xl-2 col-lg-3 col-md-4 sidebar position-fixed border-right">
        <div class="sidebar-header">
          <div class="nav-item">
              <a class="nav-link text-white" href="index.php">
                <span class="home"></span>
                  <i class="fa fa-home mr-2" aria-hidden="true"></i> Dashboard 
              </a>
          </div>
        </div>   
        <ul class="nav flex-column">
        	<li class="nav-item">
            <a class="nav-link" href="Student.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Students Details
            </a>
		      </li>
          <li class="nav-item">
            <a class="nav-link" href="attedance.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Attedance
            </a>
		      </li>
          <li class="nav-item">
            <a class="nav-link" href="results.php">
              <span data-feather="bar-chart-2"></span>
              <i class="fa fa-file-text-o mr-2" aria-hidden="true"></i> Results
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="elearning.php">
              <span data-feather="layers"></span>
               <i class="fa fa-clock-o mr-2" aria-hidden="true"></i> E-Learning
            </a>
		  </li>
		  <li class="nav-item">
            <a class="nav-link" href="../index.html">
              <span data-feather="layers"></span>
               <i class="fa fa-clock-o mr-2" aria-hidden="true"></i> Logout
            </a>
		  </li>
        </ul>
      </div>
    </nav>

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100">
			<div class="sub-main">
				<div class="bar-margin text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<h4>Subject Management System </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="results.php" method="post">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Reg No.: </label>
										<input type="text" name="reg" class="form-control" required placeholder="Enter Reg No." required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Full Name:</label>
										<select class="browser-default custom-select" name="fname">
											<option >Select Name</option>
											<?php
											$query="select fname from student";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['fname'].">".$row['fname']."</option>";
											}
										?>
										</select>
									</div>
								</div>
							</div>
								<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Subject Name: </label>
										<select class="browser-default custom-select" name="subject">
											<option >Select Subject</option>
											<?php
											$query="select course_code from courses";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['course_code'].">".$row['course_code']."</option>";
											}
										?>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Semester:</label>
										<select class="browser-default custom-select" name="semester">
											<option >Select Semester</option>
											<?php
											$query="select semester from course_subjects";
											$run=mysqli_query($con,$query);
											while($row=mysqli_fetch_array($run)) {
											echo	"<option value=".$row['semester'].">".$row['semester']."</option>";
											}
										?>
										</select>
									</div>
								</div>
							</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Marks:</label>
										<input type="text" name="marks" class="form-control" required placeholder="Enter Marks" required>
										
									</div>
								</div>
							</div>
								<div class="col-md-6 mt-4">
									<div class="form-group pt-2">
										<input type="submit" name="submit" value="Add Subject" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Sr.No</th>
									<th>Reg No.</th>
									<th>Full Name</th>
									<th>Subject Name</th>
									<th>Semester</th>
									<th>Marks</th>
									<th>Action</th>
								</tr>
								<?php
									$sr=1;
									$query="select reg ,fname,subject,semester,marks from results";
									$run=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['reg']."</td>";
									echo	"<td>".$row['fname']."</td>";
									echo	"<td>".$row['subject']."</td>";
									echo	"<td>".$row['semester']."</td>";
									echo	"<td>".$row['marks']."</td>";
									echo	"<td width='20'><a class='btn btn-danger' href=delete-function.php?reg=".$row['reg'].">Delete</a></td>";
									echo	"</tr>";
									} 
								?>
							</table>				
						</section>
					</div>
				</div>
			</div>
		</main>
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
