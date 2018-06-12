<?php
session_start();
require_once('../database.php');
$sql = "SELECT * FROM recipient_info
        WHERE r_email = '" . $_SESSION['rname'] . "';";
        
$result = mysqli_query($conn, $sql);

$responds = array();
$responds['count'] = $result -> num_rows;
$responds['data'] = array();
foreach ($result as $key => $value) {
    array_push($responds['data'], $value);
} 
echo json_encode($responds);