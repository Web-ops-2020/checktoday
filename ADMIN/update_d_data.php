<?php

require_once('../database.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['dn_id']) && isset($_GET['dn_name'])&& isset($_GET['dn_dob'])&& isset($_GET['dn_blood_grp'])&& isset($_GET['dn_last_donation'])&& isset($_GET['dn_donation_history'])&& isset($_GET['dn_district'])&& isset($_GET['dn_phone'])&& isset($_GET['dn_phone2'])&& isset($_GET['dn_email'])&& isset($_GET['dn_password'])){

    $dnr_id = filter_input(INPUT_GET, "dn_id");
    $dnr_name = filter_input(INPUT_GET, "dn_name");
    $dnr_dob = filter_input(INPUT_GET, "dn_dob");
    $dnr_blood_grp = filter_input(INPUT_GET, "dn_blood_grp");
    $dnr_last_donation = filter_input(INPUT_GET, "dn_last_donation");
    $dnr_donation_history = filter_input(INPUT_GET, "dn_donation_history");
    $dnr_district = filter_input(INPUT_GET, "dn_district");
    $dnr_phone = filter_input(INPUT_GET, "dn_phone");
    $dnr_phone2 = filter_input(INPUT_GET, "dn_phone2");
    $dnr_email = filter_input(INPUT_GET, "dn_email");
    $dnr_password = filter_input(INPUT_GET, "dn_password");


    $sql = "UPDATE donor_info
            SET d_id = '$dnr_id',
                d_name = '$dnr_name',
                d_dob = '$dnr_dob',
                d_blood_grp = '$dnr_blood_grp',
                d_last_donation = '$dnr_last_donation',
                d_donation_history = '$dnr_donation_history',
                d_district = '$dnr_district',
                d_phone = '$dnr_phone',
                d_phone2 = '$dnr_phone2',
                d_email = '$dnr_email',
                d_password = '$dnr_password'
            WHERE d_id = $dnr_id;";

    mysqli_query($conn, $sql);
    echo "Data Updated";
} 

else{
    echo "Invalid URL!";
}