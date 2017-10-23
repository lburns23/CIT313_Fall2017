<?php

class LoginController extends Controller{
	
	protected $userObject;
   
   public function do_login(){
	   
	$this->userObject = new User();
	
	if ($this->userObject->checkUser($_POST['email'], $_POST['password'])) {
		
		$userInfo = $this->userObject->getUserFromEmail($_POST['email']);
		
		$_SESSION['uID'] = $userInfo['uID'];
		
		header("Location: http://corsair.cs.iupui.edu:21851/ex4/MVC-Pro/");
	}
   }
	
	
}