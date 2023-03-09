<?php 
session_start(); //if you are going to use session in ur page its good practice to put it as a first line on your page
include("db_connect.php"); //this line should be first or second to ensure that the database and tables are created first before being used down below on the page
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		 <script src="js/jquery.js"></script>
		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
			<link rel="stylesheet" type="text/css" href="../../../css/styles.css"> 
			
	</head>



                
           
<body>		
<div id="top" class=>
		<div id="collapsable-nav" class="collapse navbar-collapse">
						<ul id="span"  class="navbar-nav ">
							<li class=" active">
								<a href="index.php">
									<span class="glyphicon glyphicon-home"></span><br class="hidden-xs">ADD LECTURER</a>
							</li>
							<li>
								<a href="admission.php">
									<span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs">ADD ADMINISTRATION</a>
							</li>
							<li>
								<a href="registra.php">
									<span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs">ADD REGISTRA</a>
							</li>
							<li>
								<a href="../lecturer.php"><span class="glyphicon glyphicon-home"></span><br>
									<i class="fas fa-sign-out-alt"></i>Logout</a>
								<a href="#">
							</li>
						</ul>
					</div>
	</div>  

						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-plus"></span> Add results</button>

			

	</div>
	
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#222d32;">
		<div class="modal-dialog" role="document">
			<div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	FILL THE FORM BELOW TO ADD ADMINISTRATOR
        	</center></h4>
      </div>

			<form action="add.php" method="POST">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Reg no.</span>
   <input type="text" class="form-control" name="reg" value="" placeholder="Enter Reg No." >
  </div>
							<div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Student name</span>
   <input type="text" class="form-control" name="fname" value="" placeholder="Enter Fullname" >
  </div>
							
							<div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Subject name</span>
   <input type="text" class="form-control" name="subject" value="" placeholder="Enter Subject name" >
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Semester</span>
   <input type="text" class="form-control" name="semester" value="" placeholder="Enter the Semester" >
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">Total marks</span>
   <input type="text" class="form-control" name="marks" value="" placeholder="Enter Total Marks" >
  </div>
  
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="Save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>