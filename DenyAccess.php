<?php
if(!isset($_SESSION["User"]))
header("index.php");
if(!$_SESSION["User"]->IsActive())
header('Location: index.php');
?>