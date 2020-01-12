





<!DOCTYPE html>
<html>
<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="col-lg-3">
    <div class="panel panel-default">
        <form method="POST" action="tskdetail.php">
            <div class="panel-heading">
                Skills of Student
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>Teacher ID:</td><td><input type="text" name="tid"></td>
                            </tr>
                            <tr>
                                <td>Skill</td><td><input type="text" name="skill"></td>
                            </tr>
                            <tr>    
                                <td>Quality</td><td><select name="quality" required>
                                        <option>N/A</option>
                                        <option>Familiar</option>
                                        <option>Professional</option>
                                        <option>Expert</option>
                                        </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
            <input type="SUBMIT" Value="ADD">
        </form>     
    </div>        
    
</body>
</html>


<?php
include('db.php');
if($_SERVER['REQUEST_METHOD']=='POST' )
{
$tid=$_POST['tid'];
$skill=$_POST['skill'];
$quality=$_POST['quality'];
$query1="INSERT INTO `ons`.`teacherskills` (`skill`, `quality`) VALUES ('$skill', '$quality');";
$query2="INSERT INTO `ons`.`ttskills` (`tid`, `skill`) VALUES ('$tid', '$skill');";

if (($result1=mysqli_query($conn,$query1)) && ($result2=mysqli_query($conn,$query2)) )
{
    echo "Subject Added Succesfully";
}
}
echo "<a href=teachprofile.php>back</a>";
?>


