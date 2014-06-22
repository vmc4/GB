<?php
if(isset($_SESSION["User"]))
if($_SESSION["User"]->IsActive())
{
header('Location: accountpage');

}
?>