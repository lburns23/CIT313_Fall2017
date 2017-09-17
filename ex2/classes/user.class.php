<?php
class user {
protected $user_id;
protected $user_type;
protected $first_name;
protected $last_name;
protected $email_address;
protected $user_level;	

public function __construct($user_level) {
	$this->userLevel = $user_level;
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