<?php

echo "<script>
    alert('Continue filling in Your details')
</script>";

require('connect.php');

session_start();

if(isset($_POST['submit'])) {

    $studies= $_POST['studies'];
    $d_studies= $_POST['d_studies'];

    $id=$_SESSION['username'];
    
    $sql = "UPDATE `student` SET studies='$studies', d_studies='$d_studies'";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: parent.php");
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
        <h2>PARENT DETAILS</h2>

        <label for="gender">Are you presently engaged on further studies ?</label><br>
            <input type = "radio" class="reg_radio" name = "studies" placeholder="studies" required value = "yes"/>Yes
            <input type = "radio" class="reg_radio" name = "studies"  placeholder="studies" required value = "no"/>No<br>

        <label>If Yes describe this studies :</label><br>
            <input class="reg_input" type="text" name="d_studies"><br>
       
        <input type="submit" name="submit" value="Submit" class="">

    </form>
</body>
</html>