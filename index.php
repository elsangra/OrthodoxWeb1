<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Orthodox College of Africa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css"> 

	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" >
			$(function(){
			function rotate(){
				
				$('.headerimg article').last().toggle(1000,function(){
					$(this).insertBefore($('.headerimg article').first()).show();
				});

			}

				setInterval(function(){
					rotate();
				},5000);			
		}); /*closing the function to rotate images*/

	</script>

</head>
<body>
	<!-- HEADER -->
	<div id="top" class=>
		<div id="collapsable-nav" class="collapse navbar-collapse">
						<ul id="span"  class="navbar-nav ">
							<li class=" active">
								<a href="index.php">
									<span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
							</li>
							<li>
								<a href="pages/about/about.php">
									<span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs">About Us</a>
							</li>
							<li>
								<a href="pages/students/login.php">
									<span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">Student Portal</a>
							</li>
							<li>
      							<a href="pages/staff/index.html">
									<span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs">Staff Portal</a>
							</li>


							<li>
								<a href="#">
									<span class="glyphicon glyphicon-phone-alt"></span><br class="hidden-xs">Contact</a>
							</li>
							<li>
								<a href="pages/apply.php">
									<span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs">Apply for a Course</a>
							</li>
							<li>
								<a href="admin/login.php">
									<span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs">Admin</a>
							</li>
							   
						</ul>
					</div>
	</div>
	<nav id="nav" class="navbar ">
		<div id="log">
			<a href="index.php" class="pull-left visible-md visible-lg">
				<div id="logo-img" alt="Logo Image"></div>
			</a>
		</div>
		<div id="title">
			<h3>ORTHODOX ARCHDIOCESE OF NAIROBI</h3>
		  	<h1>ORTHODOX COLLEGE OF AFRICA & TTC</h1>
		  	<h3>EDUCATION & SERVICE</h3>
		</div>
		
	</nav>
	<!-- END HEADER -->
	<!-- CONTENT -->
	<div class="content">
		<article class="headerimg">
			<article id="image"><img src="images/compound.jpg" width="1250px" height="500px"> <span><br>Our Compound and Classes</span></article>
			<article id="image"><img src="images/class.jpg" width="1250px" height="500px"><span>
				<br>OCA & TTC in the Presence of His Eminence Archbishop Makarios and the Vice Rector<br> Fr Nicholas Kimani was Privilleged to Host the Minister of Agricuture from Cyprus.<br> Thanks for the Support from Our Patron and the Government of Cyprus.
			</span> </article>
			<article id="image"><img src="images/emines.jpg" width="1250px" height="500px"> <span>
				<br>The minister of Finance from cyprus in a Recent Visit to our College
			</span></article>
			<article id="image"><img src="images/staff.jpg" width="1250px" height="500px"><span>
				A Recent Visit from the Nairobi Women Rep Esther Passaris Muthoni Posses for a Photo <br> with the College Workers and Administration
			</span> </article>
			<article id="image"><img src="images/minister.jpg" width="1250px" height="500px"> <span>
				<br>The Cyprus Minister of Agricuture in the recent past Visit glancing at our classes <br>in the Fashion $ Design Department
			</span></article>
		</article>
	</div>
	<div id="courses">
		<div class="row">
			<div id="offered" class="col-sm-6">
				<h3>COURSES OFFERED</h3>
				<section id="departments" class="col-sm-6">
					<span>DEPARTMENT OF EDUCATION</span><br>
						<ul>
							<li>Diploma in Primary Teachers Education (PTE)</li>
							<li>Diploma in Early Childhood Education</li>
							<li>Diploma in Special Education</li>
							<li>Diploma in Child Care and Protection</li>
							<li>Certificate in Child Care and Protection</li>
						</ul>
					<span>DEPARTMENT OF FASHION & DESIGN</span><br>
						<ul>
							<li>Certificati in Fashion Design</li>
							<li>Craft Certificate in Tailoring</li>
						</ul>
					<span>DEPARTMENT OF BUSINESS STUDIES</span><br>
						<ul>
							<li>CPA{Certified Public Accountants} Part I, II III</li>
							<li>ATD{Accounting Technical Diploma}Part I, II III</li>
							<li>Diploma in Human Resource Management (KNEC)</li>
							<li>Certificate in Human Resource Management (KNEC)</li>
							<li>Diploma in Business Administration (KNEC)</li>
							<li>Certificate in Business Administration (KNEC)</li>
						</ul>
				</section>
				<section id="departments" class="col-sm-6">
					<span>DEPARTMENT OF INFORMATION TECHNOLOGY</span><br>
						<ul>
								<li>Diploma in Information Technology</li>
								<li>Certificate in Information Technology</li>
								<li>Certificate in Computer Package</li>
								<li>Certificate in End User Package</li>
							</ul>
					<span>DEPARTMENT OF SOCIAL STUDIES</span><br>
						<ul>
							<li>Diploma in Community Development</li>
							<li>Diploma in Social Work</li>
							<li>Certificate in Community Development</li>
						</ul>
					<span>DEPARTMENT OF THEOLOGICAL STUDIES</span><br>
						<ul>
							<li>Diploma in Theology</li>
							<li>Certificate in Theology</li>
						</ul>
					<span>OTHER COURSES</span><br>
						<ul>
							<li>HIV/AIDS and Courseling</li>
							<li>Research Skills and Report Writing</li>
							<li>Project Proposal Writing Skills</li>
							<li>CBO and NGO Management</li>
						</ul>
				</section>
			</div>

			<div id="offer" class="col-sm-6">
				<div class="noticeboard">
					<h4>NOTICE BOARD</h4>
					<p>This Part Will Recieve Notices and Anouncements to the Students and Staff from the Administration  </p>
				</div>
				<div class="map">
					<a href="https://goo.gl/maps/syQep4RwXhXoD7kF9" target="blank">
		  			<div id="map-tile">
		  				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d255301.75910377307!2d36.6899826102337!3d-1.0947956734256992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scbd!5e0!3m2!1sen!2ske!4v1671318163484!5m2!1sen!2ske" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		  				<span>map</span></div>
		  		</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="" class="col-sm-6">
				<div class="hostel">
				<h2>Hostels Available</h2>
			</div>
			</div>
			<div id="" class="col-sm-6">
				<div class="intakes">
					<h2>INTAKES</h2>
					<p>JANUARY, APRIL, MAY, JULY,<br> AUGUST, SEPTEMBER & DECEMBER</p>
				</div>
			</div>
		</div>
			
	</div>
	<!-- END CONTENT -->
	<!-- FOOTER -->
	<footer class="panel-footer">
		<div class="container">
			<div class="row">
				<section id="media" class="col-sm-4">
					<span>Find us on</span><br>
						Facebook<br>
						Twitter <br>
						Instagram <br>
						Youtube
					<hr class="visible-xs">
				</section>
				<section id="address" class="col-sm-4">
					<span>Address</span><br>
					P.O.Box 34075 NAIROBI,KENYA <br>
					Tel: +254 772 892 344<br>
					E-mail: otcoafrica@gmail.com<br>
					Website: http//www.ocattc.com
					<hr class="visible-xs">
				</section>
				<section id="location" class="col-sm-4"> 
					<span>Location</span><br>
					<p>"Situated at Riruta Satellite Nairobi Near Riruta Police Station off Kabiria!"</p>
					<p>"Road (Route 4w, 102, 135, 2, 103 & 3 ) alight at Kawangware!"</p>
				</section>
			</div>
			<div class="text-center">&copy; Copyright Orthodox College of Africa & TTI 2023</div>
		</div>
	</footer>
	<!-- END FOOTER -->
</body>
</html>