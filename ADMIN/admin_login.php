<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin info</title>

    <link rel="stylesheet" href="hompage style fresh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        body{
            background-image: url("b517380049copy.jpg");
            background-size: 100%;
        }

        #admin_login{
            background-color:rgba(235, 10, 48, 0.384);
            width: 500px;
            border: solid 3px rgb(26, 26, 26);
            padding: 10px;
            margin: 10px;
        }

        legend{
            font-weight: bolder;
            font-size: 30px;
            color: rgb(0, 0, 0);
        }

        .sitesubname{
            text-align: center;
            font-weight: bold;
        }

        h4{
            color: rgb(0, 0, 0);
            text-shadow: 1px 1px rgba(37, 37, 37, 0.562);
        }

    </style>

    <?php
        if(isset($_SESSION['iname'])){
            header('location:admin_home.php');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST' && 
            isset($_POST['username']) && 
            isset($_POST['password'])){
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');
                require_once '../database.php';
                $sql = "SELECT * FROM admin_info
                        WHERE ad_email = '$username' 
                        AND ad_password = md5('$password');";

                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    $_SESSION['iname'] = $username;
                    header('location:admin_home.php');
                }
                
                else{  
                    echo "Invalid Email Or Password!";
                }
        }
    ?>


</head>


<body>
    <center>
        <h1>Admin Panel</h1>
        <hr>

        
        <div class="admins col-sm-12 col-md-12 col-lg-12">

            <div class="col-sm-12 col-md-6 col-lg-3">
                <h4>Mohammad Iftekhar Uddin Tanvir</h4>
                <p>B. Sc. Engg.(EEE)<br>[2013-2017]<br>University of Chittagong</p>
                <p>iftekharuddintanvir@gmail.com</p>
                <br>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h4>Shaibal Das</h4>
                <p>B. Sc. Engg.(EEE)<br>[2013-2017]<br>University of Chittagong</p>
                <p>shaibal016@gmail.com</p>
                <br>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3">
                <h4>Shah Mokarrom Hossain Polash</h4>
                <p>B. Sc. Engg.(EEE)<br>[2013-2017]<br>University of Chittagong</p>
                <p>aristocratpolash@gmail.com</p>
                <br>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3">
                <h4>Santa Roy</h4>
                <p>B. Sc. Engg.(EEE)<br>[2013-2017]<br>University of Chittagong</p>
                <p>santaroy41@gmail.com</p>
                <br>
            </div>
        </div>
    </center>


    <center class="col-sm-12 col-md-12 col-lg-12">
        <hr>
        <br><br><br><br><br>


        <div id="admin_login">
            <fieldset style=''>
                <legend>Admin Login</legend>
                <form action="" method="post">
                    <label for="username">Email</label><br>
                    <input type="text" name="username" id="username" required><br><br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required><br><br>
                    <input type="submit" value='Login' class="btn">
                </form>
            </fieldset>
        </div>



        <br><br><br><br><br>




    
        <div class="sitename">
            <a href="../bbms%20homepage%20fresh.php">
                <img class="titleimg" src="getblood_title.png" alt="GetBlood">
            </a>
        </div>

        <div class="sitesubname">
            Become a blood donor, find blood for patients and many more!!!!
        </div>


        <br>

        <!-- copyright -->
        <div class="col-sm-12 col-md-12 col-lg-12">
            <hr>
            <center><strong>Copyright | 2018</strong></center>
        </div>
    </center>



   <!-- hotline -->
   <div class="hotline">
        hotline: <strong>012345</strong>
    </div>
</body>
</html>