 



<?php
$query1="select * from student where email like '$_SESSION[login_user]'";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo"<tr>
                <td>Full Name:</td> 
                <td>$row[1]</td>
            </tr>
            <tr>
                <td>Class</td>
                <td>$row[2]</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>$row[3]</td>
            </tr>
            <tr>
                <td>contact</td>
                <td>$row[4]</td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>$row[5]</td>
            </tr>";        
    }
}
    
?>