<!DOCTYPE html>
<html>
  <title>Admin - ICBS</title>
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
		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 w-100">
			<div class="sub-main">
				<div class="text-center d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
					<div class="d-flex">
						<h4 class="mr-5">Student Management System </h4>
					</div>
				</div>
				<div class="col-md-2 pt-3 w-100">
  				    <!-- Large modal -->
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

							<table class="w-100 table-elements mb-5 table-three-tr text-center" cellpadding="10">
								<tr class="table-tr-head table-three text-white">
									<th>Roll.No</th>
									<th>Student Name</th>
									<th>Current Address</th>
									<th>Session</th>
									<th>Course ID</th>
									<th>Admission</th>
									<th>Profile</th>
									<th colspan="1">Operations</th>
								</tr>
								
									<tr>
										<td><?php echo $row["roll_no"] ?></td>
										<td><?php echo $row["first_name"]." ".$row["middle_name"]." ".$row["last_name"] ?></td>
										<td><?php echo $row["current_address"] ?></td>
										<td><?php echo $row["session"] ?></td>
										<td><?php echo $row["course_code"] ?></td>
										<!-- date_format($date,"Y/m/d H:i:s"); -->
										<td><?php echo date("Y-M-d",strtotime($row["admission_date"])); ?></td>
										<td><?php  $profile_image= $row["profile_image"] ?>
										<img height='50px' width='50px' src=<?php echo "images/$profile_image"  ?> >
										</td>
									
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