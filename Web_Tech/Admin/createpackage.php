<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/createpackage.css">
    </head>
    <body>
       
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manage_package.php'" value='manage_package'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Tour Packages</i></button><br>
                    <button class="btn" onClick="location.href='createpackage.php'" value='createpackage'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Package</i></button><br>
                    <button class="btn" onClick="location.href='manageuser.php'" value='manageuser'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Manage User</i></button><br>
                    <button class="btn" onClick="location.href='managebooking.php'" value='managebooking'><i class="fa fa-calendar-check-o">&nbsp;&nbsp;&nbsp;Manage Bookings</i></button><br>
                    <button class="btn" onClick="location.href='addemployee.php'" value='addemployee'><i class="fa fa-user-plus" >&nbsp;&nbsp;&nbsp;Add Employee</i></button><br>
                    <button class="btn" onClick="location.href='manageemployee.php'" value='managemployee'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Manage Employee</i></button><br>
                    <button class="btn" onClick="location.href='managepayment.php'" value='managepayment'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Payment</i></button><br>
                    <button class="btn" onClick="location.href='managereview.php'" value='managereview'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Reviews</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;WELCOME XYZ</i>

        </div>
        <div class="text" >Create Package</i>
        </div>

        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Package Name:</h3></td>
                    
                    <td><h3><input type="text" name="pname" placeholder="package name" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Location:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="loc" placeholder="Location" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Hotel Name:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="hotelid" placeholder="Hotel Name" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Transport Name:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="transpotid" placeholder="Transport Name" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Price:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="price" placeholder="price" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Guide ID:</h3></td>
                    
                    <td><h3><input type="text" name="Guide" placeholder="Tour Guide ID" ></h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3><input type="radio" name="type" value="Holiday" > Holiday <input type="radio" name="type" value="Couple trip" > Couple trip <input type="radio" name="type" value="Bussiness Trip" > Bussiness Trip</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Package Feature:</h3></td>
                    
                    <td><h3><input type="text" name="details" placeholder="Project Details" ></h3></td>
                 

                </tr>


                <tr>
                    <td> <h3>Package Image:</h3></td>
                    
                    <td>
                        <div class="upload-btn-wrapper">
                             <button class="btn1">Upload a Image</button>
                                <input type="file" name="myfile" />
                        </div>
                
                
                    </td>
                 

                </tr>


            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3>

            

            
           
        </div>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
