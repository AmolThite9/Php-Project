 



<?php
$query1="SELECT education.exam,education.board,education.yop,education.aggregate FROM education,`studeducation`,student WHERE student.email='$_SESSION[login_user]' and student.rollno=studeducation.rollno and education.exam=studeducation.exam ORDER BY `education`.`yop`  DESC;";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo"
        <tr>
            <td>$row[0]</td>
            
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
        </tr>";
    }
}
?>