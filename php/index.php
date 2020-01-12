





<?php
include('db.php');
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['login_user']=$username;
/* taking username of students*/
$q1 ="SELECT username FROM login";
if ($r1=mysqli_query($conn,$q1))
{
	while ($row1=mysqli_fetch_row($r1))
    {
		/* Comparing username */
		if($username===$row1[0])
		{
			$q2 ="SELECT password FROM login WHERE username='$username'";
			if ($r2=mysqli_query($conn,$q2))
		    {
		        while ($row2=mysqli_fetch_row($r2))
		        {
					/* Comparing password*/

				    if($password==$row2[0])
						header("location:student.php");
				}
			}
		}
	}
	/* taking username of teachers*/
	$q3 ="SELECT username FROM teacherlogin";
	if ($r3=mysqli_query($conn,$q3))
	{
		while ($row3=mysqli_fetch_row($r3))
		{
				if($username===$row3[0])
				{
					$q4 ="SELECT password FROM teacherlogin WHERE username='$username'";
					if ($r4=mysqli_query($conn,$q4))
					{
						while ($row4=mysqli_fetch_row($r4))
						{
						
							if($password==$row4[0])
								header("location:teacherhome.php");   
						}
					}
				}
		}
	}
	echo "<center><font color=blue><blink>!!Invalid password or username!!</blink></font></center>";
	include('../pages/login.html');
}
?>