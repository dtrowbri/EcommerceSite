<?php

class SecurityDAO{
    
    private $server = "localhost";
    private $databaseUser = "root";
    private $databasePassword = "root";
    private $database = "ecommercesite";
    private $port = "3307";
    
    
    public function construct(){

    }
    
    public function Authenticate(?string $username, ?string $password){
        
        $conn = new mysqli($this->server, $this->databaseUser, $this->databasePassword, $this->database, $this->port);
        
        
        if(!$conn){
            die("Connection failed: " . mysql_connect_error());
        }
        
        $searchquery = "select id from users where username = '" . $username . "' and password = '" . $password ."'";
        
        $searchResults = $conn->query($searchquery);
       
        if($searchResults->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }
    
    public function DoesUserExist(?string $username){
        $conn = new mysqli($this->server, $this->databaseUser, $this->databasePassword, $this->database, $this->port);
        
        
        if(!$conn){
            die("Connection failed: " . mysql_connect_error());
        }
        
        $searchQuery = "select id from users where username = '" . $username ."'";
        
        $searchResults = $conn->query($searchQuery);
        
        if($searchResults->num_rows > 0){
            return true;
        } else {
            return false;
        }
    }

    public function RegisterUser(?string $username, ?string $password){
        
        $conn = new mysqli($this->server, $this->databaseUser, $this->databasePassword, $this->database, $this->port);
        
        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }
        
        $insertQuery = "insert into users (`id`, `username`, `password`) values (null, '" . $username . "', '" . $password . "')";
        
        if(mysqli_query($conn, $insertQuery)){
            return true;
        } else {
            return false;
        }
    }
}

?>