 



<?php
$query1="select * from teacher where aclass='$_SESSION[login_class]';";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo"<tr>
                <td>Name:</td>
                <td>$row[1]</td>
            </tr>
            <tr>
                <td>Specialize Subjects</td>
                <td>$row[2]</td>
            </tr>
            <tr>
                <td>Advising class:</td>
                <td>$row[3]</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>$row[4]</td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td>$row[5]</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>$row[6]</td>
            </tr>";        
    }
}
    
?>