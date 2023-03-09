<?php  
		require('../../../db/connect.php');
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

      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../css/footer.css">
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

    <script>
        const toggleBtn = document.querySelector(".show-btn");
        const sidebar = document.querySelector(".sidebar");
        // undefined
        toggleBtn.addEventListener("click",function(){
            sidebar.classList.toggle("show-sidebar");
        });
    </script>

		<main role="main" class="col-xl-10 col-lg-9 col-md-8 ml-sm-auto px-md-4 mb-2 w-100 page-content-index">
			<div class="flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
				<h4>Lecture Dashboard </h4>
			</div>
			<div class="row">
				<div class=" col-lg-12 col-md-12 col-sm-12 ">
					<div>
						<section class="mt-3">
							<div class="btn btn-block table-one text-light d-flex">
								<span class="font-weight-bold"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> Time Table</span>
								<a href="" class="ml-auto" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus text-light" aria-hidden="true"></i></a>
								
							</div>
							<div class="collapse show mt-2" id="collapseOne">
								<table class="w-100 table-elements table-one-tr"cellpadding="2">
									<tr class="pt-5 table-one text-white" style="height: 32px;">
										<th>Class Name</th>
										<th>Time</th>
										<th>Day</th>
										<th>Subject</th>
										<th>Room No</th>
									</tr>
										<?php  
										$query="select * from time_table tt inner join weekdays wd on tt.day=wd.day_id";
										$run=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($run)) {
											echo "<tr>";
											echo "<td>".$row["course_code"]." ".$row["semester"]."</td>";
											echo "<td>".$row["timing_from"]."<br>".$row["timing_to"]."</td>";
											echo "<td>".$row["day_name"]."</td>";
											echo "<td>".$row["subject_code"]."</td>";
											echo "<td>".$row["room_no"]."</td>";
											echo "</tr>";
										}
									?>

								</table>
							</div>
						</section>
					</div>
				</div>
				</div>			
				</div>
			</div>	
		</main>
	
		<script type="text/javascript" src="../../../bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

