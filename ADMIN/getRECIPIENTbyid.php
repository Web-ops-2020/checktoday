<?php

require_once('../database.php');

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id');

    $sql = "SELECT * FROM recipient_info 
            WHERE r_id = $id;";

    $result = mysqli_query($conn, $sql);

    foreach ($result as $key => $value) {
        echo json_encode($value);
    }
}