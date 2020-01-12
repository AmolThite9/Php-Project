



<?php
include('db.php');

$rollno=$_POST['rollno'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['username'];
$password=$_POST['password'];
$class=$_POST['class'];
$cpassword=$_POST['cpassword'];
if($password===$cpassword)
{
$query1 = "INSERT INTO login VALUES($rollno, '$fullname', '$class', '$username', '$password');";

if ($result1=mysqli_query($conn,$query1))
{
    echo "Online Notes system";
}

$query2 = "INSERT INTO student VALUES($rollno, '$fullname', '$class', '$email', '','');";
if ($result2=mysqli_query($conn,$query2))
{
    header('location:..\pages\login.html');
}
}
else 
{
    echo "<center><font color=blue><blink>!!Confirmed password not matched!!</blink></font></center>";
    include('..\pages\signup.html');
}


?>  