<?php

include '../config/userdao.php';

class usercontroller{

	public static function login($email_user, $pass_user){

		$obj_user = new user();
		$obj_user->setemail_user($email_user);
		$obj_user->setemail_user($pass_user;

		return userdao::logon($obj_user);
	}
}