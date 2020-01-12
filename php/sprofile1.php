



<?php
    $query1="SELECT fullname FROM  `login` WHERE  `username`='$_SESSION[login_user]'";
    if ($result1=mysqli_query($conn,$query1))
    {
        while ($row=mysqli_fetch_row($result1))
        {
            echo $row[0];
        }
    }                 
?>