<?php
include('UserRepository.php');


class LoginGuard
{
	public static function StopForCredentialCheck($userName,$password)
	{
		$userRepo = new UserRepository();
		$user = new User();
		$user = $userRepo->GetUsersByName($userName);
		if($user->Password()==$password)
		{
			$_SESSION["User"] = $user;
		}
	}
}
?>
