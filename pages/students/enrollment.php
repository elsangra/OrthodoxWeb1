<?php
require('connect.php');

session_start();

if(isset($_POST['submit'])) {

    $intake= $_POST['intake'];
    $courses= $_POST['courses'];


    $id=$_SESSION['username'];
    
    $sql = "UPDATE `student` SET intake='$intake', courses='$courses'";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: finance.php");
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
        <h2>OCCUPATION EXPERIENCE (Tick one of the following)</h2>
            <label>Year of entry :</label><br>
                <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "january"/>January
                <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "april"/>April
                <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "may"/>May
                 <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "august"/>August
                <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "september"/>September
                <input type = "radio" class="reg_radio" name = "intake"  placeholder="intake" required value = "december"/>December<br>

            <p>I would like to be considered for :- (Tick where applicable)</p>
                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Diploma in Early Childhood Education"/>Diploma in Early Childhood Education<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Early Childhood Education"/>Certificate in Early Childhood Education<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Primary Teachers Education (P1)"/>Certificate in Primary Teachers Education (P1)<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Business Administration"/>Certificate in Business Administration<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Human Resource Management"/>Certificate in Human Resource Management<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Diploma in Human Resource Management"/>Diploma in Human Resource Management<br>

                  <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Community Development"/>Certificate in Community Development<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Diploma in Community Development"/>Diploma in Community Development<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Computer Aided Package"/>Certificate in Computer Aided Package<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Diploma in ICT"/>Diploma in ICT<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in ICT"/>Certificate in ICT<br>
                 
                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Mobile Application & Development"/>Certificate in Mobile Application & Development<br>

                  <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "CPA{Certified Public Accountants}"/>CPA{Certified Public Accountants}<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "ATD{Accounting Technical Diploma}"/>ATD{Accounting Technical Diploma}<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Accounting Managing Skills (CAMS)"/>Certificate in Accounting Managing Skills (CAMS)<br>

                  <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Project Management"/>Project Management<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "HIV/AIDS and Courseling"/>HIV/AIDS and Courseling<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "CBO and NGO Management"/>CBO and NGO Management<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Fashion Design"/>Fashion Design<br>

                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Diploma in Theology"/>Diploma in Theology<br>
                 
                 <input type = "radio" class="reg_radio" name = "courses"  placeholder="courses" required value = "Certificate in Theology"/>Certificate in Theology<br>
            
        <input type="submit" name="submit" value="Submit" class="">

    </form>
</body>
</html>