<?php
require('connect.php');

session_start();

if(isset($_POST['submit'])) {

    $employer= $_POST['employer'];
    $doe= $_POST['doe'];
    $duties= $_POST['duties'];


    $id=$_SESSION['username'];
    
    $sql = "UPDATE `student` SET employer='$employer', doe='$doe', duties='$duties'";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: enrollment.php");
    }else{
        echo "<script>alert('Something went Wrong. ')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Detail</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<div class="container">
        <div class="">
            <div class="reg">
                <div>
                    <h1>ORTHODOX COLLEGE OF AFRICA</h1>
                   <h3>P.O. BOX 34075-00100</h3>
                   <h2>APPLICATION FORM</h2>
                </div>
    <div>
         
    <form class="std" action="" method="post">
        <h2>OCCUPATION EXPERIENCE</h2>
                        <label>Employer :</label><br>
                            <input class="pare_input" type="text" name="employer"><br>
                        <label>Dates of Employment :</label><br>
                            <input class="pare_input" type="text" name="doe"><br>
                        <label>Responsibilities :</label><br>
                            <input class="pare_input" type="text" name="duties"><br>
       
        <input type="submit" name="submit" value="Submit" class="">

    </form>
</body>
</html>