<?php
require('connect.php');

session_start();

if(isset($_POST['submit'])) {

    $p_name= $_POST['p_name'];
    $p_relation= $_POST['p_relation'];
    $p_address= $_POST['p_address'];
    $p_tel= $_POST['p_tel'];
    $p_email= $_POST['p_email'];


    $id=$_SESSION['username'];
    
    $sql = "UPDATE `student` SET p_name='$p_name', p_relation='$p_relation', p_address='$p_address', p_tel='$p_tel', p_email='$p_email'";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: occupation.php");
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
        <h2>PARENT(s)/GUARDIAN/SPOUSE</h2>
                        <label>Name :</label><br>
                            <input class="pare_input" type="text" name="p_name"><br>
                        <label>Relation to applicantion :</label><br>
                            <input class="pare_input" type="text" name="p_relation"><br>
                        <label>Address :</label><br>
                            <input class="pare_input" type="text" name="p_address"><br>
                        <label>Telphome/Mobile :</label><br>
                            <input class="pare_input" type="text" name="p_tel"><br>
                        <label>Email :</label><br>
                            <input class="pare_input" type="text" name="p_email"><br>
       
        <input type="submit" name="submit" value="Submit" class="">

    </form>
</body>
</html>