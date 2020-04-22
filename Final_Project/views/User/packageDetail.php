<?php 
      require_once ('../../controllers/packageController.php');
      require_once ('../../controllers/bookingController.php');
      require_once ('../../controllers/billController.php');
      require_once ('../../controllers/customerController.php');

	  
	  $pid = $_GET["id"];
	  $package=getPackage($pid);
    
       
	 

    if(isset($_POST['submit']))
    {
        session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }
        $c_id = $_SESSION["loggedinuser"];
        
        $x=rand(1,10000000);
        $b_id="B-".$x;
        $pht_id=$package["p_id"];
        
        
        insertBooking($b_id, $pht_id, 'active', $c_id);   

        $y=rand(1,10000000);
        $bl_id="Bl-".$y;
        $amount=$package["price"];

        insertBill($bl_id, 'active', 'unpaid', $amount, $c_id, $b_id);
    }
?>
<html>
    <head>
        <title>Package Details</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/about.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1250px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }
        </style>
    </head>
    <body class="bg">
        <ul class="active">
            <li><a href="http://localhost:8082/Final_Project/views/User/home.php">Home</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/packages.php">Packages</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/hotel.php">Hotels</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/gallery.php">Gallery</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/Transport.php">Transprot</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/contact.php">Contact</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="http://localhost:8082/Final_Project/views/login.php">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Package Details>> <?php echo $package["type"];?></h1><hr> </font>
        </div>
        <div style="position:absolute; top: 240px; left: 30px;">
            <font><h1 style="font-size: x-large; color: azure;"><?php echo $package["features"];?></h1> </font>
        </div>
        <div style="position:absolute; top: 240px; left: 830px;">
            <img height="300" width="400" src="<?php echo $package["image"];?>"></img>
        </div>
        <form action="" method="post">
            <table border="1" style="position:absolute; top: 550px; left: 30px;">
                <tbody>
                    <tr>
                        <td>Package Name</td>
                        <td>Location</td>
                        <td>Price</td>
                        <td>Travel Date</td>
                        <td rowspan="2"><input type="submit" name="submit" value="Book For Me"></td>
                    </tr>
                    <tr>
                        <td><?php echo $package["p_name"];?></td>
                        <td><?php echo $package["location"];?></td>
                        <td>$<?php echo $package["price"];?></td>
                        <td><?php echo $package["travel_date"];?></td>
                    </tr>
                
                </tbody>
            </table>
        </form>
        <div class="footer">
            <p style="position: absolute;">Hot Line : +88018356465 <br>
               Facebook : www.facebook.com/tms_bd <br>
               fax : 0245699
            </p>
            <p align="right">Powered by :Bengal software <br>
               www.bgsoft.com.bd <br>
               +8805412245  
            </p>
          </div>
    </body>
</html>