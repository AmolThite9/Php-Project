




<?php
$query1="SELECT subject.name from subject,teacher where teacher.email like '$_SESSION[login_user]' and teacher.tid=subject.tid;";
if ($result1=mysqli_query($conn,$query1))
{
    $cnt=0;
    while ($row=mysqli_fetch_row($result1))
    {
        $cnt++;
    }
}   
if ($result1=mysqli_query($conn,$query1))
{
    
        while ($row=mysqli_fetch_row($result1))
        {
            echo "<li><a href=aosteacher.php>".$row[0]."</a></li>";
                   
                // $_SESSION[$i]=$row[0];
                
            
            
            
        }
}

?>                                    
