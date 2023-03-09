<?php
require('connect.php');

session_start();

if(isset($_POST['submit'])) {

    $finance= $_POST['finance'];
    $info= $_POST['info'];

    $id=$_SESSION['username'];
    
    $sql = "UPDATE `student` SET finance='$finance', info='$info'";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: student.php");
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
        <h2>FINANCIAL INFORMATION</h2>
            <label>How so you expect to meet the financial expences for study ?</label><br>
                <input type = "radio" class="reg_radio" name = "finance"  placeholder="finance" required value = "Fundraising"/>Fundraising
                <input type = "radio" class="reg_radio" name = "finance"  placeholder="finance" required value = "Sponsorship"/>Sponsorship
                <input type = "radio" class="reg_radio" name = "finance"  placeholder="finance" required value = "Guardian"/>Guardian
                 <input type = "radio" class="reg_radio" name = "finance"  placeholder="finance" required value = "Self_sponsorship"/>Self_sponsorship
                <input type = "radio" class="reg_radio" name = "finance"  placeholder="finance" required value = "Employer"/>Employer

            <p>How did you learn about orthodox?</p>
                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "College Prospectus"/>College Prospectus<br>

                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "Coleague"/>Coleague<br>

                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "Newspaper"/>Newspaper<br>

                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "former/current students"/>former/current students<br>

                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "Exhibition"/>Exhibition<br>

                  <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "Newspaper"/>Newspaper<br>

                 <input type = "radio" class="reg_radio" name = "info"  placeholder="info" required value = "Other"/>Other<br>
            
        <input type="submit" name="submit" value="Submit" class="">

    </form>
</body>
</html>