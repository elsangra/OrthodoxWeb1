<?php
require('connect.php');

session_start();

if(isset($_POST['submit'])) {
    
    $fname= $_POST['fname'];
    $dob= $_POST['dob'];
    $citizen= $_POST['citizen'];
    $cob= $_POST['cob'];
    $cor= $_POST['cor'];
    $idn= $_POST['idn'];
    $tel= $_POST['tel'];
    $gender= $_POST['gender'];
    $marital= $_POST['marital'];
    $cell= $_POST['cell'];
    $address= $_POST['address'];
    $email= $_POST['email'];
    $language= $_POST['language'];

    $sql = "INSERT INTO student(fname, dob, citizen, cob, cor, idn, gender, marital, tel, cell, address, email, language) 
    VALUE('$fname','$dob', '$citizen','$cob', '$cor', '$idn', '$gender', '$marital', '$tel','$cell', '$address','$email', '$language')";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: login2.php");
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
                <div>
                    <h1>ORTHODOX COLLEGE OF AFRICA</h1>
                   <h3>P.O. BOX 34075-00100</h3>
                   <h2>APPLICATION FORM</h2>
                   <div class="img">
                    <div ><img src="#" width="200px" height="200px" border="2px solid red"><br>
                        <td>
                        <input type='file' class='input' name='certificate'>
                            </td>
                    `   </div>
                        
                        <ul>
                           <li>Read carefully the detials given about the programmers offered on part B of this application form before filling</li>
                           <li>Please attach copies of accademic qualifications and a copy of ID or Passport</li>
                           <li>Two coloured passport photos. (One to be fixed at the application)</li>
                           <li>Copy of birth certificate</li>
                    </ul>
                   </div>
                </div>
                <div>
    <form action="register.php" method="post" class="reg_form">
        <h2>STUDENTS PERSONAL DETAILS</h2>
        <label>Name :</label>
            <input class="reg_input" type="text" name="fname"><br>
        <label>Date of Birth :</label>
            <input class="reg_input" type="text" name="dob"><br>
        <label>Citizenship :</label>
            <input class="reg_input" type="text" name="citizen"><br>
        <label>Country of Birth :</label>
            <input class="reg_input" type="text" name="cob"><br>
        <label>Country of Resident :</label>
            <input class="reg_input" type="text" name="cor"><br>
        <label>Passport No./ID No. :</label>
            <input  class="reg_input"type="text" name="idn"><br>
        <label for="gender">Gender:</label>
            <input type = "radio" class="reg_radio" name = "gender" placeholder="gender" required value = "female"/>Female
            <input type = "radio" class="reg_radio" name = "gender"  placeholder="gender" required value = "male"/>Male<br>
        <label for="gender">Marital status:</label>
            <input type = "radio" class="reg_radio" name = "marital" placeholder="marital" required value = "single"/>Single
            <input type = "radio" class="reg_radio" name = "marital"  placeholder="marital" required value = "married"/>Married
            <input type = "radio" class="reg_radio" name = "marital"  placeholder="marital" required value = "others"/>Other[Specify]<br>
        <label>Tel No :</label>
            <input class="reg_input" type="text" name="tel"><br>
        <label>Cel No. :</label>
            <input class="reg_input" type="text" name="cell"><br>
        <label>Current mailing adress :</label>
            <input class="reg_input" type="text" name="address"><br>
        <label>Email :</label>
            <input class="reg_input" type="text" name="email"><br>
        <label>Languages Spoken/Written (and fluency) :</label>
            <input class="reg_input" type="text" name="language"><br>

        <input type="submit" name="submit" value="Submit" class="sub">
    </form>

    </div>
        
    </div>
</div>
</body>
</html> 