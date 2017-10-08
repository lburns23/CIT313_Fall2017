<?php
class Load {
	public function view($file_name, $data=null) {
		
		if(is_array($data)) {
			extract($data);
		}
		
		include 'views/'.$file_name;
	}
	public function __construct() {

	}
	
	public function __set($name,$value) {
		
	}
	
	public function __get($name) {
		
	}
	
	public function __destruct() {
		
	}
	
}
	

?>