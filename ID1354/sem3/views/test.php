<?php

$servername = "127.0.0.1";
$username = "root";
$password = "1234";
$dbname = "recept";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$page = "kottbullar";
$user = "youssef";
$comment = "TEST1";

switch ($page) {
  case "pannkakor":
  $stmt = "DELETE FROM pannkakor WHERE user = ? AND comment = ?";
  break;
  case "kottbullar":
  $stmt = 'DELETE FROM kottbullar WHERE user = ? AND comment = ?';
  break;
  } 

$query = $conn->prepare($stmt);

$query->bind_param("ss", $user, $comment);
$query->execute();
// any additional code you need would go here.

$conn->close();
