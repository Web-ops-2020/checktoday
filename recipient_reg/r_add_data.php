<?php

require_once('../database.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['username'])&& isset($_GET['dob'])&& isset($_GET['district'])&& isset($_GET['nid'])&& isset($_GET['phone'])&& isset($_GET['phone2'])&& isset($_GET['email'])&& isset($_GET['password'])){

    $usrname = filter_input(INPUT_GET, "username");
    $db = filter_input(INPUT_GET, "dob");
    $distrct = filter_input(INPUT_GET, "district");
    $nidno = filter_input(INPUT_GET, "nid");
    $phne = filter_input(INPUT_GET, "phone");
    $phne2 = filter_input(INPUT_GET, "phone2");
    $emailo = filter_input(INPUT_GET, "email");
    $passwordo = filter_input(INPUT_GET, "password");

    $sql = "INSERT INTO recipient_info(`r_id`,
                        `r_name`,
                        `r_dob`,
                        `r_district`,
                        `r_nid`,
                        `r_phone`,
                        `r_phone2`,
                        `r_email`,
                        `r_password`)

            VALUES      (null, 
                        '$usrname',
                        '$db',
                        '$distrct',
                        '$nidno',
                        '$phne',
                        '$phne2',
                        '$emailo',
                        md5('$passwordo'));";

    $res = mysqli_query($conn, $sql);
    if($res){
        echo "Congratulation! Registration as RECIPIENT is successful!";

    }
    else{
        echo "Data Not Added!";
    }
}



else{
    echo "Invalid!";
}