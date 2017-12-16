<?php

class LoginController extends Controller{

   protected $userObject;
   
   public function index(){
	   
   }
   
   public function do_login() {
	   // handle login

       $this->userObject = new Users();

       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

		   if($this->userObject->isActive($userInfo['uID'])) {
			   
           $_SESSION['uID'] = $userInfo['uID'];
		   
		     if(strlen($_SESSION['redir']) > 0) {
                    $view = $_SESSION['redir'];
                    unset($_SESSION['redir']);
                }
                header('Location: '.BASE_URL.$view);
            }
		  
		    else {
                $this->set('error', 'Your account is not yet active. Please wait for an administrator to approve your account.');
            }
       }
       else {
           $this->set('error','Wrong password / email combination');
       }

   }
	public function logout() {
		$_SESSION["user_message"] = "Successfully logged out!";
		unset($_SESSION['uID']);
		
		session_write_close();
		
		header('Location: '.BASE_URL);
		
	}
}
?>