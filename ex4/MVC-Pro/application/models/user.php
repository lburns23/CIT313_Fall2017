<?php
class User extends Model{

public $numUsers;
public $uID;
public $first_name;
public $last_name;
public $email;
public $user_type;

	function getUser($uID){
		
		$sql =  'SELECT uID, email, first_name, last_name FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		
		$user = $results;
	
		return $user;
	
	}
	
	public function getAllUsers($limit = 0){
		
		if($limit > 0){
	
			$numUsers = ' LIMIT '.$limit;
		}
		
		$sql = 'SELECT uID, email, first_name, last_name FROM users'.$numUsers;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;
	
	}
	
	
	public function addUser($data){
		$sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		
		$message = 'User Added.';
		return $message;
		
	}
	
	public function checkUser($email, $password) {
		
		$sql = "SELECT email, password FROM users WHERE email = ?";
		
		$results = $this->db->getrow($sql, array($email));
		
		$user = $results;
		
		return $user;
		
		
		
	}
	
	public function getUserFromEmail($email) {
		
		$sql = "SELECT * FROM users WHERE email = ?";
		
		$results = $this->db->getrow($sql, array($email));
		
		$user = $results;
		
		return $user;
		
		
		
		
	}
	
}?>