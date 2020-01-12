





<?php
$query1="select teacher.name from teacher,subject where subject.name='aos' and teacher.tid=subject.tid;";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo $row[0];
        
        
    }
}
?>