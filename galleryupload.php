<?php
    $conn = mysqli_connect("localhost", "root", "", "gallery");

    if($conn)
    {
        $target_dir = "upload/";
        $target_file1 = $target_dir . basename($_FILES["image1"]["name"]);
        
        $sql = "insert into upload (image1)values('$target_file1');";

        if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES["image1"]["tmp_name"],$target_file1)) 
        {
                echo "File Uploaded Successfully..";
        }

        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
        header("refresh:2,url=galleryupload.html");
        mysqli_close($conn);
       
    }
    else
    {
        echo "database not connected.";
    }
?>