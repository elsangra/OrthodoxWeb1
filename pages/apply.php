<!DOCTYPE html>
<html>
<head>
	<title>Online Application</title>
	<style type="text/css">
		body
		{
			margin: 0;
			padding: 0;
			background-color: #171a6a;
		}
		.wrapper
		{
			height:auto;
			width: 800px;
			margin: 0 auto;
		}
		.header
		{
			height: 80px;
			padding-top: 20px;
		}
		.heading
		{
			color: red;
			font-size: 40px;
			font-weight: bold;
		}
		.heading2
		{
			color: red;
			font-size: 20px;
			font-weight: bold;
		}
		.content
		{
			height: 800px;
			background-color: white;
		}
		.footer
		{
			height: 50px;
			background-color: #560000;
			padding-top: 20px;
			padding-left: 10px;
		}
		
		.input
		{
			height: 40px;
			width: 300px;
			margin-left: 10px;
		}
		.table_maneno
		{
			font-size: 20px;
			text-align: center;
		}
		.in
		{
			width: 30%;
		}
		.footer_text
		{
			color: white;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<b class='heading'><center>ORTHODOX COLLEGE</center></b>
			<center><b class='heading2'>APPLICATION FORM</b></center>
		</div>
			<form action='apply.php' method='POST'>
		<div class='content'>
				<?php
		if (isset($_POST['submit'])) {
			$conn=mysqli_connect('localhost','root','','fieldatc');
			if (!$conn) {
				echo mysqli_error();
			}
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
			$surname=$_POST['surname'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$programme=$_POST['programme'];
			$education=$_POST['education'];
			$mathematics=$_POST['mathematics'];
			$physics=$_POST['physics'];
			$chemistry=$_POST['chemistry'];
			$biology=$_POST['biology'];
			$english=$_POST['english'];
			$certificate=$_POST['certificate'];
			$relationship=$_POST['relationship'];
			$query="INSERT INTO `apply` VALUES ('','$firstname','$middlename','$surname','$phone','$email','$programme','$education','$mathematics','$physics','$chemistry','$biology','$english','$certificate','$relationship')";
			if ($query_run=mysqli_query($conn,$query)) {
				echo "<center>Thank you for your application we shall contact you as soon as possible..!</center>";
			}
			else
			{
				echo "<center>Sorry Try again..!</center>";
			}
		}
		else
		{
			echo "<center>All field are required</center>";
		}
		?>
			<br>
			<table align='center'>
				<tr>
					<td><b class='table_maneno'>FIRSTNAME</b></td>
					<td>
						<input type='text' class='input' name='firstname'>
					</td>
				</tr><hr>
				<tr>
					<td><b class='table_maneno'>MIDDLENAME</b></td>
					<td>
						<input type='text' class='input' name='middlename'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>SURNAME</b></td>
					<td>
						<input type='text' class='input' name='surname'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>PHONE NO:</b></td>
					<td>
						<input type='text' class='input' name='phone'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>EMAIL</b></td>
					<td>
						<input type='text' class='input' name='email'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>PROGRAMME</b></td>
					<td>
						<select class='input' name='programme'>
							<option>Select the course</option>
							<optio>Diploma in Primary Teachers Education (PTE)</optio>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Special Education</option>
								<option>Diploma in Child Care and Protection</option>
								<option>Certificate in Child Care and Protection</option>
								<option>Diploma in Primary Teachers Education (PTE)</option>
								<option>Diploma in Early Childhood Education</option>
								<option>Diploma in Early Childhood Education</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>EDUCATION LEVEL</b></td>
					<td>
						<select class='input' name='education'>
							<option>select education level</option>
							<option>form four</option>
							<option>Form six</option>
							<option>Certificate</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>MARKS</b></td>
					<td>
						<table class='input' border='1px' style='border-collapse:collapse;'>
							<tr>
								<th>SUBJECT</td><th>GRADE</td>
							</tr>
							<tr>
								<td>Mathematics</td>
								<td><center><input type='text' class='in' name='mathematics'></center></td>
							</tr>
							<tr>
								<td>Physics</td>
								<td><center><input type='text' class='in' name='physics'></center></td>
							</tr>
							<tr>
								<td>Chemistry</td>
								<td><center><input type='text' class='in' name='chemistry'></center></td>
							</tr>
							<tr>
								<td>Biology</td>
								<td><center><input type='text' class='in' name='biology'></center></td>
							</tr>
							<tr>
								<td>English</td>
								<td><center><input type='text' class='in' name='english'></center></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>UPLOAD CERTIFICATE</b></td>
					<td>
						<input type='file' class='input' name='certificate'>
					</td>
				</tr>
				<tr>
					<td><b class='table_maneno'>RELATIONSHIP</b></td>
					<td>
						<select class='input' name='relationship'>
							<option></option>
							<option>Single</option>
							<option>Married</option>
							<option>Engaged</option>
						</select>
					</td>
				</tr>
				
			</table>

			<br><br>
			<center><input type='submit' value='submit' class='input' name='submit'></center>
		
		</div>
		
	</form>
</body>
</html>