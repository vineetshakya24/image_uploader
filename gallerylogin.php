<?php
    $conn = mysqli_connect("localhost", "root", "", "gallery");

    if($conn)
    {        
        $a = $_POST["username"];
        $b = $_POST["password"];
        
        $sql = "select * from users where username='$a' and password='$b' ";
        
        $result = mysqli_query($conn, $sql);
        $nums = mysqli_num_rows($result);

        if($nums > 0)
        {
            echo "login successfull...!";
        }
        else
        {
            echo "check password 0r username...";
        }
        header("refresh:2,url=galleryupload.html");
    }
    else
    {
        echo "database not connected...!";
    }
?>
