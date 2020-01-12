   



<?php
    $query1="SELECT * FROM  `notes`;";
    if ($result1=mysqli_query($conn,$query1))
    {
        while ($row=mysqli_fetch_row($result1))
    	{
            echo "<tr class=danger>
            <td>$row[0]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>$row[4]</td>
            <td>$row[5]</td>
            </tr>";
        }
    }
?>
