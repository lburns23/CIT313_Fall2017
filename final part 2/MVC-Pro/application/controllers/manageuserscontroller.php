<?php
class ManageUsersController extends Controller{
	
	public $userObject;
    protected $access = "1";
	
	public function index() {
		
        $this->userObject = new Users();
        $users = $this->userObject->getAllUsers1();
        $this->set('users',$users);
        $this->set('title', 'Manage Users');
    }

	public function delete($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
		
	}
	
	public function confirm_delete($uID){
		$this->userObject = new Users();
		$result = $this->userObject->removeUser($uID);
		$outcome = $this->userObject->getAllUsers1();
		$this->set('users',$outcome);
		$this->set('message', $result);
		$this->set('task', 'confirm_delete');
		$this->set('title', 'Manage Users');
		

	}
	public function approve($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);
	  	$this->set('user',$user);
		
	}
	  public function change($uID) {
        $this->userObject = new Users();
		  if ($this->userObject->isActive($uID)) {
            $result = $this->userObject->removeUser($uID);
        } else {
            $result = $this->userObject->approveUser($uID);
        }
		$outcome = $this->userObject->getAllUsers1();
        $this->set('users', $outcome);
		$this->set('message',$result);
		$this->set('task', 'change');
        $this->set('title', 'Manage Users');

       
    }
	
	 
}