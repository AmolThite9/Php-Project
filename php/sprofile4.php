



<?php
$query1="SELECT studentskills.skill, studentskills.quality
FROM  `student` ,  `studentskills` ,  `sskills` , login
WHERE login.username =  '$_SESSION[login_user]'
AND student.rollno = sskills.rollno
AND studentskills.skill = sskills.skill
ORDER BY  `studentskills`.`skill` ASC ;";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo "<tr><td>$row[0]:</td><td>$row[1]</td></tr>";
    }
}
?>