<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetBlood-search blood donor and blood bank information</title>
    <link rel="stylesheet" href="hompage style fresh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="home_script.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>



<body>
    <div class="home">

        <div class="homeheader col-sm-12 col-md-12 col-lg-12">

                <div class="sitename col-sm-12 col-md-9 col-lg-10">
                    <a href="bbms%20homepage%20fresh.php">
                        <img class="titleimg" src="getblood_title.png" alt="GetBlood">
                    </a>
                </div>


                <div class="sitesubname col-sm-12 col-md-9 col-lg-10">
                    Become a blood donor, find blood for patients and many more!!
                    <br><br>
                </div>

                <br><br>


                <div class="loginreg col-sm-12 col-md-3 col-lg-2">

                    Donor <br>
                    <button class="btn registerd" onclick="window.location='donor_reg/d_reg.php';">Register</button>
                    <button class="btn signind" onclick="window.location='donor_login/d_login.php';">Log In</button>

                    <br><br>

                    Recipient <br>
                    <button class="btn registerr" onclick="window.location='recipient_reg/r_reg.php';">Register</button>
                    <button class="btn signinr" onclick="window.location='recipient_login/r_login.php';">Log In</button>

                </div>

        </div>

        <div class="hometab col-sm-12 col-md-12 col-lg-12">
            <ul>
                <li><a href="#home">Home</a></li>
                <!-- <li class="donors">
                    <a href="#Donors">Donors</a>

                    <div class="donorsdropdown">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                <li><a href="#Blood Banks">Blood Banks</a></li> -->
                <li><a href="ADMIN/admin_login.php">Admin</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        

        <div class="homebody col-sm-12 col-md-12 col-lg-12">

        <center>
            <h1>
                <br><br>
                
            <button class="btn inventory" onclick="window.location='inventory/inventory.php';"><h1>Show Inventory</h1></button>
                
                <br><br><br>
            </h1>
        </center>



            <!-- <form action="">
            <div class="searchbar">
                <center><h3>Find blood</h3><center>
                <h1><input type="text" name="search" id="searchbar" placeholder="Search.."></h1>
            </div>

            <center>
                I am searching for<br>
                <div class="searchtype">
                    <select required>
                        <option value="donor">Donor</option>
                        <option value="bloodbank">Blood Bank</option>
                        <option value="" selected>-Select type</option>
                    </select>

                    <input type="text" name="searcharea" id="searcharea" placeholder="Enter city name.." !important>
                </div>
            </center>
            </form> -->


            <hr>

        </div>


        <div class="homefooter col-sm-12 col-md-12 col-lg-12">
            <div class="about col-sm-12 col-md-5 col-lg-3">
                <br> <strong>Get<strong>Blood</strong></strong> is a search system for listing blood donors, recipients and providing information about blood groups available in a blood bank. This site will help to find blood for patients in an easier and efficient way and will save time in case of emergency.
                <br><br>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-7">
                <br>
            </div>
            

            <div class="contact col-sm-12 col-md-3 col-lg-2">
                <h4>Contact us</h4>

                <!-- company name -->
                <div class="contactinfo">
                    <strong>Get<strong>Blood</strong></strong> Inc.
                </div>

                <!-- other contact info -->
                <p>
                    <br>
                    <strong>Email:</strong> <br>
                    getblood@abc.com <br><br>

                    <strong>Address:</strong><br>
                    Chittagong, Bangladesh
                </p>    
                
            </div>


            <!-- copyright -->
            <div class="col-sm-12 col-md-12 col-lg-12">
                <hr>
                <center><strong>Copyright | 2018</strong></center>
            </div>


        </div>

        <!-- hotline -->
        <div class="hotline">
            Admin Login: <br>
            Username : admin@admin.com<br>
            Password : pass
        </div>
    </div>

<div  style='   color: yellow;
                font-weight: bolder;
                font-size: larger;
                text-align: center;
                text-shadow: 2px 2px rgba(37, 37, 37, 0.562);
                position: fixed;
                bottom: 0;
                right: 0;
                display: block;
                height: auto;
                background-color: #222222c2;
                padding: 15px;
                border-radius: 2px;
                text-align: end;
                text-decoration: none;'>
    <a href='doc.pdf' style='color:yellow;text-decoration:none;' target="_blank">Documentation</a>
</div>
   
</body>
</html>