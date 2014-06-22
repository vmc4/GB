<?php 

include('LoginGuard.php');
//Take the form data and give them to loginguard through StopForCredentialCheck
LoginGuard::StopForCredentialCheck("bob","bobspass");
//
include('GrantAccess.php');
include('DenyAccess.php');




?>