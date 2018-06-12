<?php
ob_start();
session_start();
if(!isset($_SESSION['dname'])){
    header('location:d_login.php');
}
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="hompage style fresh.css">

    <style>
        body{
            background-image: url("b517380049copy.jpg");
            background-size: 100%;
        }

        table,tr,td,th{
            font-weight: bold;
            text-align: left;
            /* background-color: rgba(5, 184, 124, 0.288); */
            width: auto;
            /* border: solid 3px rgb(26, 26, 26); */
            padding: 5px 10px;
            margin: 10px;
        }

        th{
            text-align: right;
        }


        logout{
            display: block;
            background-color: cornsilk;
        }




        legend{
            text-align: center;
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

    <?php 
        if(isset($_GET['action']) && $_GET['action'] == 'logout'){
            unset($_SESSION['dname']);
            header('location:d_login.php');
        }

        echo '<center><h1>WELCOME!</h1><br>Donor: ' .$_SESSION['dname'];
        echo '</center>';
    ?>

        <hr><br><br>
        <center>
            <div id="d_list">
                
            </div>


            <br><br>
            <a href="?action=logout" class="logout">logout</a> 
        
            <br><br><br>

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


    <script>
        function showData(){
            var ajax = new XMLHttpRequest();
            ajax.open('get', 'd_show_login_data.php', true);
            ajax.send();

            ajax.onreadystatechange = function(){

                if(ajax.readyState == 4){
                    
                    var responds = ajax.responseText;
                    var responds_array = JSON.parse(responds);

                    var html_table = '<table>';

                    console.log(responds_array);
                    
                    responds_array['data'].forEach(function(element) {
                        
                        html_table += "<tr><th>ID</th><td>:</td><td>" + element['d_id'] + "</td></tr>";
                        html_table += "<tr><th>Name</th><td>:</td><td>" + element['d_name'] + "</td></tr>";
                        html_table += "<tr><th>Date of Birth</th><td>:</td><td>" + element['d_dob'] + "</td></tr>";
                        html_table += "<tr><th>Blood group</th><td>:</td><td>" + element['d_blood_grp'] + "</td></tr>";
                        html_table += "<tr><th>Last donation</th><td>:</td><td>" + element['d_last_donation'] + "</td></tr>";
                        html_table += "<tr><th>Donation history</th><td>:</td><td>" + element['d_donation_history'] + "</td></tr>";
                        html_table += "<tr><th>District</th><td>:</td><td>" + element['d_district'] + "</td></tr>";
                        html_table += "<tr><th>Contact</th><td>:</td><td>" + element['d_phone'] + "</td></tr>";
                        html_table += "<tr><th>Contact (optional)</th><td>:</td><td>" + element['d_phone2'] + "</td></tr>";
                        html_table += "<tr><th>Email</th><td>:</td><td>" + element['d_email'] + "</td></tr></table>";
                    }, this);

                    document.getElementById('d_list').innerHTML = html_table;
                }
            }
        }
        showData();
    </script>

  
</body>
</html>