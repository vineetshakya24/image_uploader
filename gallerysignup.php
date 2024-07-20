<?php
    $x = mysqli_connect("localhost", "root", "", "gallery");

    if($x)
    {
        $a = $_POST["uname"];
        $b = $_POST["phone"];
        $c = $_POST["gmail"];
        $d = $_POST["date"];
        $e = $_POST["password"];
        $f = $_POST["cpassword"];
        

        if($e == $f)
        {
          $sql = "insert into users values('$a','$b','$c','$d','$e')";

          if (mysqli_query($x, $sql)) 
          {
            echo "sign-up successfull...!";
          } 
            else 
            {
              echo "Unable To Register Right Now , Please Try Again later..";
            }
            header("refresh:2,url=galleryupload.html");
        }

        else
        {
          echo "<script>alert('Your Password is Incorrect..');</script>";
        }      
    }
    else
	{
		echo "Database Not Connected..";
	}
?>
