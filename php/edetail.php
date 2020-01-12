





<!DOCTYPE html>
<html>
<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="col-sm-8">
    <div class="panel panel-default">
        <form method="POST" action="edetail.php">
            <div class="panel-heading">
                Education Details
            </div>
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>rollno</th>
                                <th>Exam</th>
                                <th>Board/University</th>
                                <th>Year of passing</th>
                                <th>Aggregate(%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="rollno"></td>
                                <td><input type="text" name="exam"></td>
                                <td><input type="text" name="board"></td>
                                <td><input type="text" name="yop"></td>
                                <td><input type="text" name="aggregate"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="SUBMIT" Value="ADD">
        </form>
    </div>
</div>
        
    
</body>
</html>


<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=='POST' )
{
$rollno=$_POST['rollno'];
$exam=$_POST['exam'];
$board=$_POST['board'];
$yop=$_POST['yop'];
$aggregate=$_POST['aggregate'];
$query1="INSERT INTO `ons`.`education` (`exam`, `board`, `yop`, `aggregate`) VALUES ('$exam', '$board', '$yop', '$aggregate');";
$query2="INSERT INTO  `ons`.`studeducation` (`rollno` , `exam`) VALUES ('$rollno', '$exam');";

if (($result1=mysqli_query($conn,$query1)) && ($result2=mysqli_query($conn,$query2)) )
{
    echo "<a href=studprofile.php>back</a>";
}
}
?>


