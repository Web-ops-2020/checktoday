<?php
session_start();
require_once('../database.php');
$sql = "SELECT * FROM donor_info
        WHERE d_email = '" . $_SESSION['dname'] . "';";
        
$result = mysqli_query($conn, $sql);

$responds = array();
$responds['count'] = $result -> num_rows;
$responds['data'] = array();
foreach ($result as $key => $value) {
    array_push($responds['data'], $value);
} 
echo json_encode($responds);