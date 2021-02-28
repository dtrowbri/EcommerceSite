<?php

include_once 'header.php';

if(isset($_SESSION['principal']) == false || $_SESSION['principal'] == null || $_SESSION['principal'] == false){
    header("Location: Login.html");
}
?>