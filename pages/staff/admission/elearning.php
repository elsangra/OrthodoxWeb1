<?php  
		require('../../../db/connect.php');

		if (isset($_POST['btn_save'])) {
		$course_name=$_POST['course_name'];
		$subject_name=$_POST['subject_name'];
		$pdf=$_POST['pdf'];
		$videos=$_POST['videos'];

		$query="insert into elearning(course_name, subject_name, pdf, videos)values('$course_name','$subject_name','$pdf','$videos')";
		$run=mysqli_query($con,$query);
		if ($run) {
		echo "<script>alert('successfully Added the Resourses ')</script>";
		}
		else{
			echo "something went wrong";
		}
	}
	?>
<!DOCTYPE html>
<html>
  <title>Regista</title>
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
		
	<</nav>
    
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
            <a class="nav-link" href="attedance.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Attedance
            </a>
		      </li>
		      <li class="nav-item">
            <a class="nav-link" href="finance.php">
              <span data-feather="file"></span>
              <i class="fa fa-user mr-2" aria-hidden="true"></i>Finance
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
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">E Learning Management System </h4>
					</div>
				</div>

							<div class="row">
								<div class="col-md-12">
									<table class="w-100 table-elements table-three-tr" cellpadding="3">
										<tr class="table-tr-head table-three text-white">
											<td colspan="5" class="text-center text-white"><h4>E-Learning Resourses</h4></td>
										</tr>
										<tr class="table-tr-head">
											<th>Sr No.</th>
											<th>Course Name</th>
											<th>Subject Name</th>
											<th>Upload PDF</th>
											<th>Videos</th>

										</tr>
										<?php
									$sr=1;
									$query="select course_name,subject_name,pdf,videos from elearning";
									$run=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($run)) {
									echo	"<tr>";
									echo	"<td>".$sr++."</td>";
									echo	"<td>".$row['course_name']."</td>";
									echo	"<td>".$row['subject_name']."</td>";
									echo	"<td>".$row['pdf']."</td>";
									echo	"<td>".$row['videos']."</td>";
									echo	"</tr>";
									} 
								?>
									</table>
								</div>
							</div>				
						</section>
					</div>
				</div>
			</div>
		</main>
	<script type="text/javascript" src="../../../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../../../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

