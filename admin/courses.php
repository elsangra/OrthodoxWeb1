<?php
    include('../db/connect.php');

	if (isset($_POST['submit'])) {
		$course_code=$_POST['course_code'];
		$course_name=$_POST['course_name'];
		$semester_or_year=$_POST['semester_or_year'];
		$no_of_year=$_POST['no_of_year'];

		$query="insert into courses(course_code,course_name,semester_or_year,no_of_year)values('$course_code','$course_name','$semester_or_year','$no_of_year')";
		$run=mysqli_query($con,$query);
		if ($run) {
		echo "<script>alert('successfully Added the Course ')</script>";
		}
		else{
			echo "nosomething went wrong";
		}
	}
?>

<!DOCTYPE html>
<html>
  <title>Admin - ICBS</title>
  <!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <link rel="shortcut icon" href="$baseUrl/../Images/icbs_logo.png" type="image/x-icon">
    
    <!-- css style goes here -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">

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
              <a class="nav-link text-white" href="dashboard.php">
                <span class="home"></span>
                  <i class="fa fa-home mr-2" aria-hidden="true"></i> Dashboard 
              </a>
          </div>
        </div>   
        <ul class="nav flex-column">
        	<li class="nav-item">
            <a class="nav-link" href="../admin/Student.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Students Details
            </a>
		      </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/Teacher.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Add User
            </a>
		      </li>

          <li class="nav-item">
            <a class="nav-link" href="../admin/Courses.php">
              <span data-feather="users"></span>
              <i class="fa fa-book mr-2" aria-hidden="true"></i>Courses
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/subjects.php">
              <span data-feather="bar-chart-2"></span>
              <i class="fa fa-file-text-o mr-2" aria-hidden="true"></i> Subjects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/time-table.php">
              <span data-feather="layers"></span>
               <i class="fa fa-clock-o mr-2" aria-hidden="true"></i> Time Table
            </a>
		  </li>

           <li class="nav-item">
            <a class="nav-link" href="../admin/student-fee.php">
              <span data-feather="layers"></span>
              <i class="fa fa-credit-card-alt mr-2" aria-hidden="true"></i> Student Fee
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
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
					<h4>Course Management System </h4>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="courses.php" method="post">
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Course Code: </label>
										<input type="text" name="course_code" class="form-control" required placeholder="Enter Course Code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Course Name:</label>
										<input type="text" name="course_name" class="form-control" required placeholder="Enter Course Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Semester Or Years:</label>
										<input type="text" name="semester_or_year" class="form-control" required placeholder="Enter Semester Or Years">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">No of Years:</label>
										<input type="text" name="no_of_year" class="form-control" required  placeholder="Enter No of Years">
									</div>
								</div>
							</div>
							<div class="row w-100">
								<div class="col-md-12">
									<input type="submit" name="submit" value="Add Course" class=" btn btn-primary ml-auto">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 ml-2">
						<section class="mt-3">
							<table class="w-100 table-elements mb-5 table-three-tr" cellpadding="3">
								<tr class="table-tr-head table-three text-white">
									<th>Sr.No</th>
									<th>Course Code</th>
									<th>Cource Name</th>
									<th>No. Semeste</th>
									<th>No. Years</th>
									<th>Action</th>
								</tr>
									<?php
									$sr=1;
									$query="select course_code,course_name,semester_or_year,no_of_year from courses";
									$run=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['course_code']."</td>";
									echo	"<td>".$row['course_name']."</td>";
									echo	"<td>".$row['semester_or_year']."</td>";
									echo	"<td>".$row['no_of_year']."</td>";
									echo	"<td width='20'><a class='btn btn-danger' href=delete-function.php?course_code=".$row['course_code'].">Delete</a></td>";
									echo	"</tr>";
									} 
								?>
							
							</table>				
						</section>
					</div>
				</div>
			</div>
		</main>
    <script>
        const toggleBtn = document.querySelector(".show-btn");
        const sidebar = document.querySelector(".sidebar");
        // undefined
        toggleBtn.addEventListener("click",function(){
            sidebar.classList.toggle("show-sidebar");
        });
    </script>
		
	
		<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

