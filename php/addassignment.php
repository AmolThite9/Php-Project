





<!DOCTYPE html>
<html>
<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="col-sm-9">
    <div class="panel panel-default">
        <form method="POST" action="addassignment.php">
            <div class="panel-heading">
                New Assignment
            </div>
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>sid</th>
                                <th>Topic name</th>
                                <th>Assignment</th>
                                <th>Submission date(yyyy/mm/dd)</th>
                                <th>Take reference from here</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="sid"></td>
                                <td><input type="text" name="topicname"></td>
                                <td><input type="text" name="assignmnet"></td>
                                <td><input type="text" name="lastdate"></td>
                                <td><input type="text" name="refer"></td>
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
$sid=$_POST['sid'];
$topicname=$_POST['topicname'];
$assignmnet=$_POST['assignmnet'];
$lastdate=$_POST['lastdate'];
$refer=$_POST['refer'];
$query1="INSERT INTO `ons`.`assignment` (`ano`, `sid`, `date`, `topicname`, `assignment`, `lastdate`, `refere`) VALUES (NULL, '$sid', CURRENT_TIMESTAMP, '$topicname', '$assignmnet', '$lastdate', '$refer');";
if ($result1=mysqli_query($conn,$query1))
{
    echo "Succesfully added";
}
}
echo "<a href=aosassignment.php>back</a>";
?>


