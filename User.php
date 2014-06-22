<?php
class User{
private $UserName;
private $Password;
function __construct($userName, $password)
{
	$this->UserName = $userName;
	$this->Password = $password;
}
function UserName()
{
	return $this->UserName;
}
function Password()
{
	return $this->Password;
}
function IsActive()
{

	return true;
}
}
?>