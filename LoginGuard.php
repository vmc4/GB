<?php
include('UserRepository.php');


class LoginGuard
{
    public static function StopForCredentialCheck($userName,$password)



	{

		$userRepo = new UserRepository();
		$user = $userRepo->GetUsersByName($userName);
		if($user!=null)
		if($user->Password()==$password)
		{
			$_SESSION["User"] = $user;
		}
	}
}
?>
