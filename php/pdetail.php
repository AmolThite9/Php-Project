<!DOCTYPE html>
<html>
<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="col-sm-3">
            <div class="panel panel-default">
                <form method="POST" action="pdetail.php">


                <div class="panel-heading">
                    Personal Details
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                
                <td>contact</td>
                <td><input type="text" name="contact"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="male">male 
<input type="radio" name="gender" value="female">female</td>
            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="SUBMIT" Value="UPDATE">
</form>
            </div>
        </div>
        
    
</body>
</html>


<?php
//include('db.php');
if($_SERVER['REQUEST_METHOD']=='POST' )
{

$contact=$_POST['contact'];
$gender=$_POST['gender'];

$query1="UPDATE  `ons`.`student` SET  `contact` =  $contact,
`gender` =  '$gender' WHERE  `student`.`email` =  '$_SESSION[login_user]';";
if ($result1=mysqli_query($conn,$query1))
{
    echo "<a href=studprofile.php>back</a>";
}
}
?>
