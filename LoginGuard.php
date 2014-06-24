<?php

include('UserRepository.php');

class LoginGuard
{
	public static function StopForCredentialCheck($userName,$password)
	{
		$userRepo = new UserRepository();
		if($userRepo->GetUsersByName($userName)->Password()==$password)
		{
			$_SESSION["User"] = (new UserRepository())->GetUsersByName($userName);
		}
	}
}
?>
