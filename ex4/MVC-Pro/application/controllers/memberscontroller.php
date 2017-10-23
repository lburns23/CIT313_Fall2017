<?php
class MembersController extends Controller{
	
	public $userObject;
	
	public function defaultTask(){
		
		$this->userObject = new User();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Registered Members');
		$this->set('users',$users);
	
	}
   
   	public function view($uID){
	   
		$this->userObject = new User();
		$user = $this->userObject->getUser($uID);	    
	  	$this->set('user',$user);
	   
   	}
	

}