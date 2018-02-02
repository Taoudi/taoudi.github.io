<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace recept\DAO;

class commentDAO {

    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "1234";
    private $dbname = "recept";
    private $conn;

    //create and check connection
    public function __construct() {
        $this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname) or die("connection failed");
    }

    // Returns result of query
    public function getComments($page) {
        switch ($page) {
            case "pannkakor":
                $query = "SELECT comment, user from pannkakor";
                break;
            case "kottbullar":
                $query = "SELECT comment, user from kottbullar";
                break;
            default :
                return false;
        }

        $result = $this->conn->query($query);
        return $result;
    }

    //Inserts comment and corresponding username into database, returns false if the insertion fails.

    public function enterComment($user, $comment, $page) {
        switch ($page) {
            case "pannkakor":
                $stmt = "INSERT INTO pannkakor (user, comment) VALUES (?,?)";
                break;
            case "kottbullar":
                $stmt = "INSERT INTO kottbullar (user, comment) VALUES (?,?)";
                break;
            default :
                return false;
        }

        $query = $this->conn->prepare($stmt);
        $query->bind_param("ss", $user, $comment);
        return $query->execute();
    }

    //deletes comment and corresponding username, returns false if deletion fails.

    public function deleteComment($user, $comment, $page) {
        switch ($page) {
            case "pannkakor":
                $stmt = "DELETE FROM pannkakor WHERE user = ? AND comment = ?";
                break;
            case "kottbullar":
                $stmt = 'DELETE FROM kottbullar WHERE user = ? AND comment = ?';
                break;
            default :
                return false;
        }

        $query = $this->conn->prepare($stmt);
        $query->bind_param("ss", $user, $comment);
        return $query->execute();
    }

}
