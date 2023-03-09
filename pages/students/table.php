<?php
require('connect.php');

if(isset($_POST['submit'])) {

    $studies= $_POST['studies'];
    $d_studies= $_POST['d_studies'];
    
    $sql = "INSERT INTO student(studies, d_studies) VALUE('$studies','$d_studies')";
    $result = mysqli_query($con,$sql);
    if($result) {
        header("location: parent.php");
    }else{
        echo "<script>alert('Something went Wrong. ')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

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
            <div class=" border shadow-lg">
                <div>
                    <h1>ORTHODOX COLLEGE OF AFRICA</h1>
                   <h3>P.O. BOX 34075-00100</h3>
                   <h2>APPLICATION FORM</h2>
                </div>
                <div>
                    <h2>STUDENTS PERSONAL EDUCATION INFORMATION</h2>
                    <p>Please list all schools, colleges or universities previously attended (Do not list primary schools)</p>

                    <form action="#" method="post">
                    <table border="2px" >
                        <tr>
                            <th>Name of Institution</th>
                            <th>Duration of study</th>
                            <th>Degree/Diploma/Certificate<br> attained</th>
                        </tr>
                    <?php
                    for($i=1;$i<=4;$i++)
                    {
                    ?>
                        <tr>
                            <td>
                            <input type="text" name="columnone<?php echo $i; ?>" />
                            </td>
                            <td>
                            <input type="text" name=" columntwo<?php echo $i;?>" />
                            </td>
                            <td>
                            <input type="text" name=" columnthree<?php echo $i;?>" />
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
                    <input type="submit" value="Submit"/>
                    </form>
                    <p></p> 
                    <label>Are you presently engaged on further studies ?</label><br>
                    <input type = "radio" class="reg_radio" name = "studies" placeholder="studies" required value = "yes"/>Yes
                    <input type = "radio" class="reg_radio" name = "studies"  placeholder="studies" required value = "no"/>No<br>
                    <label>If Yes describe this studies  :</label><br>
                    <input class="reg_input" type="text" name="d_studies"><br>

                </div>
                <input class="sub" type="submit" value="Submit">
                <button class="sub"><a href="../../index.php">Back</a></button>
               
            </div>
        </div>
    </div>
</body>

</html>