<?php 

include('LoginGuard.php');
//Take the form data and give them to loginguard through StopForCredentialCheck
$user = $_POST['userCheck'];
$pass = $_POST['passCheck'];
LoginGuard::StopForCredentialCheck($user,$pass);
//
include('GrantAccess.php');
include('DenyAccess.php');




?>