



<?php
$query1="SELECT teacherskills.skill, teacherskills.quality
FROM  `teacher` ,  `teacherskills` ,  `ttskills` , teacherlogin
WHERE teacherlogin.username =  '$_SESSION[login_user]'
AND teacher.tid = ttskills.tid
AND teacherskills.skill = ttskills.skill
ORDER BY  `teacherskills`.`skill` ASC ;";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo "<tr><td>$row[0]:</td><td>$row[1]</td></tr>";
    }
}
?>