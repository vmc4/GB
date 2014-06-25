<?php
if(!isset($_SESSION["User"]))
header('Location: GB-Master.php');
if(!$_SESSION["User"]->IsActive())
header('Location: GB-Master.php');
?>