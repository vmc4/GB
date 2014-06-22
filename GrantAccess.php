<?php
include('User.php');
if(isset($_SESSION["User"]))
if($_SESSION["User"]->IsActive())
header("accountpage");
?>