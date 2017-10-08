<?php
	
class User extends Model {
	
	public function __construct()  {
		parent::__construct();
	
	}
	
	public function __set($name,$value) {
		
	}
	
	public function getName() {
		return array (   
			'userID'=>'burns23',
			'firstname'=>'Laura',
			'lastname'=>'Burns',
			'email'=>'leburns1997@gmail.com',
			'role'=>'admin'
		);

	}
	
	public function __destruct() {
		
	}
	
	
	
}
	
	
	
	
	
	
?>