<?php
ob_start();
require_once('../database.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['username']) && isset($_GET['bloodgroup'])&& isset($_GET['dob'])&& isset($_GET['lastdonation'])&& isset($_GET['district'])&& isset($_GET['phone'])&& isset($_GET['phone2'])&& isset($_GET['email'])&& isset($_GET['password'])){

    $usrname = filter_input(INPUT_GET, "username");
    $bloodgrp = filter_input(INPUT_GET, "bloodgroup");
    $db = filter_input(INPUT_GET, "dob");
    $lstdonation = filter_input(INPUT_GET, "lastdonation");
    $distrct = filter_input(INPUT_GET, "district");
    $phne = filter_input(INPUT_GET, "phone");
    $phne2 = filter_input(INPUT_GET, "phone2");
    $emailo = filter_input(INPUT_GET, "email");
    $passwordo = filter_input(INPUT_GET, "password");

    $sql = "INSERT INTO donor_info (`d_id`, 
                                        `d_name`, 
                                        `d_dob`, 
                                        `d_blood_grp`, 
                                        `d_last_donation`, 
                                        `d_district`, 
                                        `d_phone`, 
                                        `d_phone2`, 
                                        `d_email`, 
                                        `d_password`) 
            VALUES(null, '$usrname', '$db', '$bloodgrp', '$lstdonation', '$distrct', '$phne', '$phne2', '$emailo', md5('$passwordo'));";


    $res = mysqli_query($conn, $sql);
    if($res){
        echo "Congratulation! Registration as DONOR is successful!";
    }
    else{
        echo "Data Not Added!";
    }
}



else{
    echo "Invalid!";
}