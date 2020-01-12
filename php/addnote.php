





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
        <form method="POST" action="addnote.php">
            <div class="panel-heading">
                New Note
            </div>
            <div class="panel-body">
                <div class="table-responsive table-bordered">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>sid</th>
                                <th>Topic name</th>
                                <th>Notes(ppt/docs)</th>
                                <th>Additional links</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="sid"></td>
                                <td><input type="text" name="topicname"></td>
                                <td><input type="text" name="ppt"></td>
                                <td><input type="text" name="link"></td>
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
$ppt=$_POST['ppt'];
$link=$_POST['link'];
$query1="INSERT INTO `ons`.`notes` (`srno`, `sid`, `date`, `topicname`, `ppt`, `link`) VALUES (NULL, '$sid', CURRENT_TIMESTAMP, '$topicname', '$ppt', '$link');";
if ($result1=mysqli_query($conn,$query1))
{
    echo "Succesfully added";
}
}
echo "<a href=aosnotes.php>back</a>";
?>


