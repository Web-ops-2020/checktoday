<?php

require_once('../database.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']) ){

    $id = filter_input(INPUT_GET, "id");

    $sql = "DELETE FROM donor_info
            WHERE d_id = $id;";

    mysqli_query($conn, $sql);
    echo "Data Deleted";
}

else{
    echo "Invalid URL!";
}