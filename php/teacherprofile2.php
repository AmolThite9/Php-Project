



<?php
$query1="SELECT teacherskills.skill,teacherskills.quality FROM `teacher`,`teacherskills`,`ttskills` WHERE teacher.aclass='$_SESSION[login_class]' and teacher.tid=ttskills.tid and teacherskills.skill=ttskills.skill;";
if ($result1=mysqli_query($conn,$query1))
{
    while ($row=mysqli_fetch_row($result1))
    {
        echo "<tr><td>$row[0]:</td><td>$row[1]</td></tr>";
    }
}
?>