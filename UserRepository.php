<?php

include('User.php');

class UserRepository
{
	private static $users = new Array(new User('bob','bobspass'),new User('bill','billspass'),new User('phil','philspass'));
	public static function GetUsers()
	{
		return $users;
	}
	public static function GetUsersByName($name)
	{
		foreach($users as $user)
		{
			if($user->UserName() == $name)
				return $user;
		}
	}
}
?>