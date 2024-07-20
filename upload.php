<?php
    $conn = mysqli_connect("localhost", "root", "", "custom");

    if($conn)
    {

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["myfile"]["name"]);
        
        $sql = "insert into myfile values('$target_file');";

        if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) 
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