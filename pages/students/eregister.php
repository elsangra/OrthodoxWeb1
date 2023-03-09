<?php
require('connect.php');

if(isset($_POST['submit'])) {

    $fname= $_POST['fname'];
    $reg= $_POST['reg'];
    $idn= $_POST['idn'];
    $course= $_POST['course'];
    $tel= $_POST['tel'];
    $email= $_POST['email'];
    
    $sql = "INSERT INTO elearning(fname, reg, idn, course, tel, email) 
    VALUE('$fname','$reg','$idn', '$course', '$tel','$email')";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: e_learning.php");
    }else{
        echo "<script>alert('Something went Wrong. ')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="reg">
           
    <form action="register.php" method="post" class="reg_form">
        <h2>REGISTER FOR E-LEARNING</h2>
        <label>Name :</label>
            <input class="reg_input" type="text" name="fname"><br>
        <label>Reg No:</label>
            <input class="reg_input" type="text" name="reg"><br>
        <label>Passport No./ID No. :</label>
            <input  class="reg_input"type="text" name="idn"><br>
        <label>Course :</label>
            <input class="reg_input" type="text" name="course"><br>
        <label>Tel No :</label>
            <input class="reg_input" type="text" name="tel"><br>
        <label>Email :</label>
            <input class="reg_input" type="text" name="email"><br>
        <input type="submit" name="submit" value="Submit" class="sub">
    </form>
    </div>
    	
    </div>
</div>
</body>
</html> 