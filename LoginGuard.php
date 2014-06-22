<?php

include('UserRepository.php');

class LoginGuard
{
	public static StopForCredentialCheck($userName,$password)
	{
		if(UserRepository::GetUsersByName($userName)->Password()==$password)
		{
			$_SESSION["User"] = UserRepository::GetUsersByName($userName);
		}
	}
}
?>