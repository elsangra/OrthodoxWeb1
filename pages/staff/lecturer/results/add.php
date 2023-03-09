<?php
session_start();
include("db_connect.php");

if(isset($_POST['Save'])){
	
			  $reg =mysqli_real_escape_string($db,$_POST["reg"]); 
			  		$fname =mysqli_real_escape_string($db,$_POST["fname"]);	            
			  $subject = mysqli_real_escape_string($db,$_POST["subject"]);    
	          $semester= mysqli_real_escape_string($db,$_POST["semester"]);
			  $marks= mysqli_real_escape_string($db,$_POST["marks"]);
			   
			         $sql="INSERT INTO results (reg,fname,subject,semester,marks) VALUES('$reg','$fname','$subject','$semester','$marks')";
					$result=mysqli_query($db,$sql);  
					if($result) {
        header("location: index.php");
    }else{
        echo "<script>alert('Something went Wrong. ')</script>";
    }
}
			?>