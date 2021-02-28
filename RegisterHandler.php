<?php
require_once 'header.php';
require_once 'SecurityService.php';

$username = $_POST["usernameInput"];
$password = $_POST["passwordInput"];
$SecurityService = new SecuritySevice();

if($username != null && $password != null){
    if($SecurityService->DoesUserExist($username)){
        include "UserExists.php";
    } else {
        if($SecurityService->RegisterUser($username, $password)){
            include "RegistrationSuccessful.php";
        }else {
            include "RegistrationFailed.php";
        }
    }
} else {
    include "RegistrationNullError.php";
}

?>