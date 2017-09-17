<?php
class admin extends user {

public function __construct($user_level, $user_id) {
	parent::__construct($user_level);
	$this->userType = 2;
	$this->userName = $user_id;
	return;
}	

public function setInfo($name) {
	$this->first_name = $name;
	$this->last_name = $name;
	$this->email_address = $name;
	return;
}

public function getInfo() {
	return $this->first_name;
	return $this->last_name;
	return $this->email_address;
}

public function __destruct() {
	

}

}
?>