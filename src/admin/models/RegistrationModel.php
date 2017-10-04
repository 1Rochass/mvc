<?php
class RegistrationModel extends Model
{
	function setRegistration($data)
	{
		$username = $data['username'];
		$userpassword = $data['userpassword'];
		$useremail = $data['useremail'];
		return $username;
		// $sql = "INSERT INTO `users` (username, userpassword, useremail) VALUES ($username, $userpassword, $useremail)";
		// return $result = $this->db->exec($sql);
	}
}