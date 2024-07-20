<?php
    $conn = mysqli_connect("localhost", "root", "", "custom");

    if($conn)
    {
        $sql = "select * from myfile";
        $result = mysqli_query( $conn, $sql);
        $nums = mysqli_num_rows($result);

        if($nums>0)
        {
            echo "<table border='1' width='70%' cellpadding='0' cellspacing='0'>";
            echo "<thead>";
            echo "<th>USERNAME</th>";
            echo "<th>PASSWORD</th>";
            echo "<th>SIGNATURE</th>";
            echo "<th>THUMB PRINT</th>";
            echo "</thead>";
            echo "<tbody>";

            for($i=1; $i<=$nums; $i++)
            {
                $row = mysqli_fetch_assoc($result);
                $uname = $row["username"];
                $password = $row["password"];
                $sign = $row["sign"];
                $print = $row["thumbprint"];


                echo "<tr>";
                echo "<td>$uname</td>";
                echo "<td>$password</td>";
                echo "<td><img src='$sign' width=50 height=50/></td>";
                echo "<td><img src='$print' width=50 height=50/></td>";
                
                echo "</tr>";
            }
            echo "</tbody></table>";
        }
        else 
        {
            echo "0 results";
        }
    }
    else
    {
        echo "Database Not Connected..";
    }

    mysqli_close($conn);

?>