<?php 
session_start();

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$array =array();

$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "recept";
$conn = new \mysqli($servername, $username, $password, $dbname) or die("connection failed");


if($_SESSION['gotopage'] === "kottbullar.php"){
$query = "SELECT * from kottbullar";
$result =$conn->query($query);
$valid = false;
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $array[] = array('comment' => $row['comment'], 'username' => $row['user']);
            }
        }
}

if($_SESSION['gotopage'] === "pannkakor.php"){
$query = "SELECT * from pannkakor";
$result =$conn->query($query);
$valid = false;
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $array[] = array('comment' => $row['comment'], 'username' => $row['user']);
            }
        }
}
echo json_encode($array);

