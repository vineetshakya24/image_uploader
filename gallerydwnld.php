<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Gallery_Dwnld</title>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

                <link rel="icon" href="logo.png" />
            
            <style>
                *
                {
                    margin:0;
                    padding:0;
                    font-family: 'Kanit', sans-serif;
                }

                html
                {
                    scroll-behavior: smooth;
                }
                nav .topbar
                {
                    width:100%;
                    height:30px;
                    background-color: brown;
                }
                nav .topbar .left
                {
                    margin-left:20%;
                    list-style: none;
                }
                nav .topbar .left li
                {
                    color:white;
                    display: inline-block;
                    font-size: 20px;
                    margin-left: 3%;
                }
                nav .topbar .right
                {
                    float:right;
                    margin-right: 4%;
                    color:white;
                    font-size: 20px;
                    position: relative;
                    top: -30px;
                }
                nav .topbar .right button
                {
                    background-color: brown;
                    border-color: white;
                    border-radius: 9px;
                    height:25px;
                    width:70px;
                    position: relative;
                    top:-4px;
                }
                nav .topbar .right button a
                {
                    text-decoration: none;
                    color:white;
                }
                nav .header 
                {
                    width:100%;
                    height: 90px;
                    transition:0.5s;
                    color:black;
                }
                nav .header:hover
                {
                    background-color:indigo;
                }
                nav .header img
                {
                    width:100px;
                    margin-left: 3%;
                }
                nav .header .logoname
                {
                    color:aqua;
                    font-size: 60px;
                    font-weight: bold;
                    position: relative;
                    top: -20px;
                    transition: 0.5s;
                }
                nav .header:hover .logoname
                {
                    color:rgb(90, 90, 245);
                }
                nav .header ul
                {
                    float: right;
                    width:1000px;
                    list-style: none;
                    position:relative;
                    top: -90px; 
                    right:-180px   
                }
                nav .header ul li
                {
                    display: inline-block;
                    margin-right: 5%;
                }
                nav .header ul li a
                {
                    text-decoration: none;
                    color:black;
                    font-size: 25px;
                    transition:0.5s;
                }
                nav .header:hover ul li a
                {
                    color:white;
                }

                .heading
                {
                    margin-left:43%;
                    color:indigo;
                    font-size: 60px;
                    position:relative;
                    top:-20px;
                }
                .a1
                {
                    
                    width:100%;
                    background-color:rgba(255,255,255,0.3);
                    display:inline-block;
                    margin-left:5%;
                }
                .button
                {
                    text-decoration:none;
                    color:black;
                    border: 2px solid black;
                    border-radius: 30px;
                    padding: 8px 25px;
                    margin-left:40%;
                    
                }
                 h1
                {
                    color:white;
                    text-align:center;
                }

                .footer
                {
                    background-color: rgb(3, 3, 3, 0.8);
                    width:100%;
                    height:150px;
                    transition:0.5s;
                }
                .footer:hover
                {
                    background-color:black;
                }
                .footer .b2
                {
                    margin-left: 25%;
                    padding-top: 40px;
                    
                }
                .footer .b2 li
                {
                    color:white;
                    font-size: 50px;
                    display: inline-block;
                    margin-left:7%;
                    transition:0.5s;
                }
                .footer .b2 li:hover
                {
                    color:blueviolet;
                }
                .footer span
                {
                    color:white;
                    float: right;
                    margin-right:10px;
                    transition: 0.5s;
                }
                .footer:hover span
                {
                    color:aqua;
                }

                .scrollup
			{
				position: fixed;
				bottom: 50px;
				right: 40px;
				font-size: 35px;
				background: green;
				color: white;
				padding: 5px 10px;
				border-radius: 40px;
			}
            </style>

        </head>
        <body>
            <nav id="navbar">
                        <div class="topbar">
                            <ul class="left">
                                <li><i class="fa fa-instagram"></i></li>
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-youtube"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                            </ul>
                            <span class="right"><button><a href="gallerylogin.html">LOG-IN<i class="fa fa-right-to-bracket"></i></a></button></span>
                            <span class="right"><i class="fa fa-phone"></i> :+91-1234567890</span>
                            <span class="right"><i class="fa fa-envelope"></i> :abc1234@gmail.com</span> 
                            
                        </div>

                        <div class="header">
                                <span><img src="logo.png"></span>
                                <span class="logoname">GALLERY</span>
                            <ul>
                                <li><a href="Gallery.html">HOME</a></li>
                                <li><a href="#">ABOUT US</a></li>
                                <li><a href="galleryupload.html">UPLOAD</a></li>
                                <li><a href="gallerydwnld.php">GALLERY</a></li>
                                <li><a href="#">CONTACT US</a></li>
                            </ul>
                        </div>
            </nav>

                    
                        <span class="heading"> Gallery</span><br>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "gallery");

                            if($conn)
                            {
                                $sql = "select * from upload order by id desc";
                                $result = mysqli_query( $conn, $sql);
                                $nums = mysqli_num_rows($result);

                                if($nums>0)
                                {
                                    for($i=1; $i<=$nums; $i++)
                                    {
                                        $row = mysqli_fetch_assoc($result);
                                        $pic1 = $row["image1"];
                                        $id = $row["id"];

                                        echo "<div class='a1'><img src='$pic1' width=90%  /></div>" . "<br>" . "<br>" . "<a href='DeleteImage.php?id=$id' class='button'>DELETE IMAGE</a>" . "<br>" . "<br>";
                                    }
                                }
                                else 
                                {
                                    echo '<script>alert("PLEASE SELECT IMAGES FIRST")</script>';
                                }
                            }
                            else
                            {
                                echo "Database Not Connected..";
                            }

                            mysqli_close($conn);
                        ?>

                    
                


                <div class="footer">
                    <ul class="b2">
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-youtube"></i></li>
                        <li><i class="fa fa-twitter"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                    </ul>
                    <span> ©copyright 2022</span>
                    <span>Terms and Policy</span>
                </div>

                <a href="#navbar" class='scrollup'><i class="fa fa-arrow-up"></i></a>
        </body>
</html>
