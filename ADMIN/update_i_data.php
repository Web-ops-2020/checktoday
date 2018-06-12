<?php

require_once('../database.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['i_id'])&& isset($_GET['i_ab1']) && isset($_GET['i_ab2'])&& isset($_GET['i_a1'])&& isset($_GET['i_a2'])&& isset($_GET['i_b1'])&& isset($_GET['i_b2'])&& isset($_GET['i_o1'])&& isset($_GET['i_o2'])){

    $in_id = filter_input(INPUT_GET, "i_id");
    $in_ab1 = filter_input(INPUT_GET, "i_ab1");
    $in_ab2 = filter_input(INPUT_GET, "i_ab2");
    $in_a1 = filter_input(INPUT_GET, "i_a1");
    $in_a2 = filter_input(INPUT_GET, "i_a2");
    $in_b1 = filter_input(INPUT_GET, "i_b1");
    $in_b2 = filter_input(INPUT_GET, "i_b2");
    $in_o1 = filter_input(INPUT_GET, "i_o1");
    $in_o2 = filter_input(INPUT_GET, "i_o2");



    $sql = "UPDATE blood_inventory
            SET i_id = '$in_id',
                AB1 = '$in_ab1',
                AB2 = '$in_ab2',
                A1 = '$in_a1',
                A2 = '$in_a2',
                B1 = '$in_b1',
                B2 = '$in_b2',
                O1 = '$in_o1',
                O2 = '$in_o2'
            WHERE i_id= '$in_id';";

    mysqli_query($conn, $sql);
    echo "Data Updated!!";
} 

else{
    echo "Invalid URL!";
}