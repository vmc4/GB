<?php
Class User{
private $UserName;
private $Password;
function __construct($userName, $password)
{
	$UserName = $userName;
	$Password = $password;
}
function UserName()
{
	return $UserName;
}
function Password()
{
	return $Password;
}
function IsActive()
{

	return true;
}
?>