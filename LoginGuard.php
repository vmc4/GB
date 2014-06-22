<?php

include('UserRepository.php');

class LoginGuard
{
	public static function StopForCredentialCheck($userName,$password)
	{
		if((new UserRepository())->GetUsersByName($userName)->Password()==$password)
		{
			$_SESSION["User"] = (new UserRepository())->GetUsersByName($userName);
		}
	}
}
?>