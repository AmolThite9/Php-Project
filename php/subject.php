




<?php
 $query1="SELECT name FROM  `subject` WHERE  `class` LIKE  '$_SESSION[login_class]'";
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
    for($i=0;$i<$cnt;$i++)
    {
        
        while ($row=mysqli_fetch_row($result1))
        {
          $_SEESSION['$a']=$row[0];
          echo "<li><a href=aos.php>".$_SEESSION['$b']=$_SEESSION['$a']."</a></li>";
          break;
          
        } 
    }
    
}

?>                                    
