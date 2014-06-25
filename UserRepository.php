<?php

include('User.php');

class UserRepository
{
    private $users;
	private $u1;
	private $u2;
	private $u3;

	function __construct()
	{
	 $this->u1 = new User('bob','bobspass');
	 $this->u2 =new User('bill','billspass');
	 $this->u3 =new User('phil','philspass');
	$this->users = Array( 
	$this->u1, $this->u2, $this->u3
	);
	}
	public function GetUsers()
	{
		return $users;
	}
	public function GetUsersByName($name)
	{
		foreach($this->users as $user)
		{
			if($user->UserName() == $name)
				return $user;
		}
	}
}
?>