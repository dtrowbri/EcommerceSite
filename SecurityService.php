<?php
require_once 'SecurityDAO.php';

class SecuritySevice{
    
    private $DAO;
    
    public function __construct(){
        $this->DAO = new SecurityDAO();
    }
    
    public function Authenticate(?string $username, ?string $password){
        return $this->DAO->Authenticate($username, $password);
    }
    
    public function RegisterUser(?string $username, ?string $password){
        if($this->DAO->RegisterUser($username, $password)){
            return true;
        }else {
            return false; 
        }
    }
    
    public function DoesUserExist(?string $username){
        $results = $this->DAO->DoesUserExist($username);
        if($results){
            return true;
        } else {
            return false;
        }
    }
}
?>