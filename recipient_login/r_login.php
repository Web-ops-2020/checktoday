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
    <title>login</title>

    <link rel="stylesheet" href="hompage style fresh.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <?php
        if(isset($_SESSION['rname'])){
            header('location:r_home.php');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST' && 
            isset($_POST['username']) && 
            isset($_POST['password'])){
                $username = filter_input(INPUT_POST, 'username');
                $password = filter_input(INPUT_POST, 'password');
                require_once '../database.php';
                $sql = "SELECT * FROM recipient_info
                        WHERE r_email = '$username' 
                        AND r_password = md5('$password');";

                $result = $conn -> query($sql);

                if($result -> num_rows > 0){
                    $_SESSION['rname'] = $username;
                    header('location:r_home.php');
                }
                
                else{  
                    echo "Invalid Email Or Password!";
                }
        }
    ?>


    <style>
        body{
            background-image: url("b517380049copy.jpg");
            background-size: 100%;
        }

        #recp_login{
            background-color:rgba(61, 169, 231, 0.288);
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
    </style>

</head>





<body>
    <center>
        <div id="recp_login">
            <fieldset style='width:50%'>
                <legend>Recipient Login</legend>
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