<?php
    include '../../controllers/issueController.php';


    session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }

        
        $c_id = $_SESSION["loggedinuser"];
            
            
    if(isset($_POST['submit']))
            {
                
                
                    $x=rand(1,10000000);
                    $isid="I-".$x;
                    $comment=$_POST['comment'];

                    insertIssue($isid, $comment, $c_id);
                
            }
?>

<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/contact.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 750px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }    
        </style>
        <script type="text/javascript">
            function validate() 
            {

                var error="";
                var chc="";
                var name = document.getElementById( "t1" );

            

            if( name.value == "" )
                {
                    error = " You Have To Write Issue ";
                            
                    document.getElementById( "na" ).innerHTML = error;

                    chc="ok";
                           
                }

            if( name.value != "" )
                {
                    if(!name.value.replace(/\s/g, '').length)
                        {
                            error = " Issue cannot be only space. ";
                            
                            document.getElementById( "na" ).innerHTML = error;
                            chc="ok";
                        }

                    else if(name.value.match(/^[a-zA-Z\s]+$/))
                        {
                            error = "";
                            
                            document.getElementById( "na" ).innerHTML = error;
                                    
                        }
                    else{
                                   
                            error = " Issue can  only be latter and space. ";
                            
                            document.getElementById( "na" ).innerHTML = error;
                            chc="ok";
                        }
                            
                           
                }

                if(chc!="")
                    {   
                        return false;
                    }
                        
                else
                    {  
                        return true;
                    }
        }


            </script>
    </head>
    <body class="bg">
    
        <ul class="active">
        <li><a href="home.php">Home</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="hotel.php">Hotels</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Transport.php">Transprot</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="profile.php">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
           <font size="60"><h1>Feel free to contact with us regarding any issue</h1> </font>
        </div>  
        <form action="" method="post" onsubmit="return validate();">
            <table style="position:absolute; top: 200; left: 200px;">
                <tbody>
                    <tr>
                        <td align="right">ID:</td>
                        <td><input type="text" value="<?php echo $c_id?>" style="width: 300; height: 40;" placeholder="write your id"></td>
                       
                    </tr>
        
                    <tr>
                        <td align="right">Comment:</td>
                        <td><input name="comment" id="t1" type="text" style="width: 450; height: 200;" placeholder="write your issue or thoughts"></td>
                        <td><span id="na" style="color:red"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" name="submit" value="Submit"></td>
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