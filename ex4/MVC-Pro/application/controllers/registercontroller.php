	
	<?php
include('application/controllers/password.php');
class RegisterController extends Controller{
	
	public $userObject;
	
	public function add(){
		
			$this->userObject = new User();
			
			$password = $_POST['password'];
			$passhash = password_hash($password,PASSWORD_DEFAULT);
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'], 'email'=>$_POST['email'],'password'=>$passhash);
			
			
			$result = $this->userObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
  public function defaultTask(){
	  
		$this->userObject = new User();
		
		$this->set('task', 'add');	
	}
	}

	?>