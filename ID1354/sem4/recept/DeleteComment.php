<?php 
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "recept";
$conn = new \mysqli($servername, $username, $password, $dbname) or die("connection failed");
        if( $_SESSION['gotopage']=== "pannkakor.php"){
        $query = $conn->prepare( "DELETE FROM pannkakor where comment = ? AND user = ?");
        $query->bind_param("ss", $_POST['comment'],$_POST['username']);
        $query->execute();
        }

if( $_SESSION['gotopage'] === "kottbullar.php"){
        $query = $conn->prepare( "DELETE FROM kottbullar where comment = ? AND user = ?");
        $query->bind_param("ss", $_POST['comment'],$_POST['username']);
        $query->execute();
        }
 ?>