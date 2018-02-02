<?php
session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

if(isset($_SESSION['username'])) {
$username = $_SESSION['username'];
$array = array('username' => $username);
echo json_encode($array);
}
