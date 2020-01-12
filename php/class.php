




<?php 
    $query1="select class from login where username like '$_SESSION[login_user]'";
    if ($result1=mysqli_query($conn,$query1))
    {
            while ($row=mysqli_fetch_row($result1))
            {
                $class=$row[0];
                
            }
    }
    $query1="select name from teacher where aclass like '$class';";
    if ($result1=mysqli_query($conn,$query1))
    {
        while ($row=mysqli_fetch_row($result1))
        {
            echo $row[0];
        }
    }
    
?>