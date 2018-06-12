<?php

require_once('../database.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['re_id']) && isset($_GET['re_name'])&& isset($_GET['re_dob'])&& isset($_GET['re_history'])&& isset($_GET['re_district'])&& isset($_GET['re_nid'])&& isset($_GET['re_phone'])&& isset($_GET['re_phone2'])&& isset($_GET['re_email'])&& isset($_GET['re_password'])){

    $rec_id = filter_input(INPUT_GET, "re_id");
    $rec_name = filter_input(INPUT_GET, "re_name");
    $rec_dob = filter_input(INPUT_GET, "re_dob");
    $rec_history = filter_input(INPUT_GET, "re_history");
    $rec_district = filter_input(INPUT_GET, "re_district");
    $rec_nid = filter_input(INPUT_GET, "re_nid");
    $rec_phone = filter_input(INPUT_GET, "re_phone");
    $rec_phone2 = filter_input(INPUT_GET, "re_phone2");
    $rec_email = filter_input(INPUT_GET, "re_email");
    $rec_password = filter_input(INPUT_GET, "re_password");


    $sql = "UPDATE recipient_info
            SET r_id = '$rec_id',
                r_name = '$rec_name',
                r_dob = '$rec_dob',
                r_history = '$rec_history',
                r_district = '$rec_district',
                r_nid = '$rec_nid',
                r_phone = '$rec_phone',
                r_phone2 = '$rec_phone2',
                r_email = '$rec_email',
                r_password = '$rec_password'
            WHERE r_id = $rec_id;";

    mysqli_query($conn, $sql);
    echo "Data Updated";
} 

else{
    echo "Invalid URL!";
}