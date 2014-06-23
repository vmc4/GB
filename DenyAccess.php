<?php
if(!isset($_SESSION["User"]))
header('Location: index.php');
if(!$_SESSION["User"]->IsActive())
header('Location: index.php');
?>