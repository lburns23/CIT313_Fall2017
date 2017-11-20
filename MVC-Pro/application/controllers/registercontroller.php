	<?php

class RegisterController extends Controller{
	
	public $userObject;
	
	public function add(){
		
			$this->userObject = new User();
			
			$data = array('first_name'=>$_POST['post_first_name'],'last_name'=>$_POST['post_last_name'], 'email'=>$_POST['post_email'],'password'=>$_POST['post_password']);
			
	
			$result = $this->userObject->addUser($data);
			
			$this->set('message', $result);
			
		
	}
	
  public function defaultTask(){
	  
		$this->userObject = new User();
		
		$this->set('task', 'add');	
	}
	}

	?>