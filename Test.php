<?php
require_once 'SecurityDAO.php';
require_once 'SecurityService.php';

echo "starting program.";
$dao = new SecuritySevice();
$dao->RegisterUser('asdf', 'newpassword');

echo "created dao";
$results = $dao->Authenticate('asdf', 'test');

if($results){
    echo "<br>user exists";
} else {
    echo "<br>user does not exist";
}

$results2 = $dao->Authenticate('test', 'test');

if($results2){
    echo "<br>user exists";
} else {
    echo "<br>user does not exist";
}
?>