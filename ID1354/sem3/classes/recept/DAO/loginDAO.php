<?php
namespace recept\DAO;
class loginDAO {
    private $data = array();
     private $servername = "127.0.0.1";
private $username = "root";
private $password = "1234";
private $dbname = "recept";
private $conn;
    public function __construct(){
     $this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->dbname) or die("connection failed");
    }
    
       public function isLoginValid(){
       $query = "SELECT * from user";
        $result =$this->conn->query($query);
        $arr = array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $temp = array($row['user'],$row['pass']);
                array_push($arr, $temp);             
            }
        }
       return $arr;
    }
    
    
    
        public function doesUserExist(){
       $query = "SELECT user from user";
        $result =$this->conn->query($query);
        $arr = array();
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                array_push($arr, $row['user']);             
            }
        }
       return $arr;
    }
    
    public function registerUser($username, $password){
         $query = $this->conn->prepare( "INSERT INTO user (user, pass) VALUES (?,?)");
        $query->bind_param("ss", $username, $password);
        $query->execute();
   }
}