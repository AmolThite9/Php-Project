<!DOCTYPE html>
<html>
<head>
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="col-sm-14">
        <div class="panel panel-default">
            <form method="POST" action="setting1.php">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Current Password</td>
                                    <td><input type="text" name="cpassword"></td>
                                </tr>
                                <tr>
                                    <td>New Password</td>
                                    <td><input type="text" name="npassword"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <input type="SUBMIT" Value="CHANGE">
            </form>
        </div>
    </div>
</body>
</html>


<?php
//include('db.php');
if($_SERVER['REQUEST_METHOD']=='POST' )
{

$cpassword=$_POST['cpassword'];
$npassword=$_POST['npassword'];

$query1="Select password from login where username='$_SESSION[login_user]';";
if ($result1=mysqli_query($conn,$query1))
{
    echo $_SESSION['login_user'];
    while ($row=mysqli_fetch_row($result1))
    {
        if($row[0]===$cpassword)
        {
            $query2="UPDATE `ons`.`login` SET `password` = 'npassword' WHERE `login`.`username` = '$_SESSION[login_user]'";
            if ($result1=mysqli_query($conn,$query1))
            {
                echo "<a href=#> Succesfully Changed</a>";      
            }
        }
        else 
            echo "Current password is wrong";
    }
}
}
?>
