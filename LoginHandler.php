<?php

require_once 'header.php';

require_once 'SecurityService.php';

$username = $_POST["usernameInput"];
$password = $_POST["passwordInput"];
$SecurityService = new SecuritySevice();

if($username != null && $password != null && $SecurityService->Authenticate($username, $password)){
    $_SESSION['principal'] = true;
    include "LoginSuccess.php";
} else {
    $_SESSION['principal'] = false;
    include "LoginFailed.php";
}

?>