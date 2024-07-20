<?php
    $conn = mysqli_connect("localhost", "root", "", "custom");

    if($conn)
    {
        $a = $_POST["uname"];
        $b = $_POST["password"];

        $target_dir = "upload/";
        $target_file1 = $target_dir . basename($_FILES["sign"]["name"]);
        $target_file2 = $target_dir . basename($_FILES["print"]["name"]);
        
        $sql = "insert into myfile values('$a','$b','$target_file1','$target_file2');";

        if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["print"]["tmp_name"], $target_file2)) 
        {
                echo "File Uploaded Successfully..";
        }

        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }

        mysqli_close($conn);
       
    }
    else
    {
        echo "database not connected.";
    }
?>