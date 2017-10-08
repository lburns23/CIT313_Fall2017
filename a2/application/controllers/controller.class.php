<?php
class Controller {
	public $load;
	public $user;
	
	public function __construct() {
		$this->load = new Load();
		$this->user = new User();
		$this->home();
	}	
	
	public function home() {
		$data = $this->user->getName();
		$this->load->view('view.php', $data);
	
	}

	public function __set($name,$value) {
		
	}
	
	public function __get($name) {
	
	}
	
	public function __destruct() {
		
	}
	
}
?>