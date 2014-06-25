<?php

include('LoginGuard.php');

$user = $_GET['userCheck'];
$pass = $_GET['passCheck'];

LoginGuard::StopForCredentialCheck($user,$pass); 
?>