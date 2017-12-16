<?php

class MembersController extends Controller{
	
	public $userObject;
  
   	public function users($uID){
        $this->userObject = new Users();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
   	}
	
	public function index(){
        $this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}
	
	public function profile() {
		$this->userObject = new Users();
		$this->set('first_name', $this->userObject->first_name);
		$this->set('last_name', $this->userObject->last_name);
		$this->set('email', $this->userObject->email);
	}
	public function update() {
		$this->userObject = new Users();
		if($_POST['password'] != "") {
			$password = $_POST['password'];
			$passhash = password_hash($password,PASSWORD_DEFAULT);
			$this->userObject->change_password($passhash);
		}
		
		$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email']);
		$this->userObject->update($data);
		$this->set('message', 'Profile updated.');
		
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
	}
	
	
}
?>