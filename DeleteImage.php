<?php
    $conn = mysqli_connect("localhost", "root", "", "gallery");

     if($conn)
     {
         $id = $_GET['id'];

         $sql = "delete from upload where id='$id'";
                                
         if (mysqli_query($conn, $sql)) 
        {
             echo "Image Deleted Successfully...!";
        }
                        
        else 
        {
            echo "Sorry, there was an error Delete The Image";
        }
        header("refresh:2,url=gallerydwnld.php");
         mysqli_close($conn);                              
        }
        else
        {
            echo "Database Not Connected..";
        }
?>