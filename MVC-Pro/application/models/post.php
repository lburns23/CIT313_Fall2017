<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT pID, title, content, date, categories.name as category, categories.categoryID, first_name, last_name FROM users inner join posts on 
		users.uID = posts.uID inner join categories on categories.categoryID = posts.categoryID WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT pID, title, content, date, categories.name as category, first_name, last_name FROM users inner join posts on users.uID = posts.uID inner join categories on categories.categoryID = posts.categoryID'.$numposts;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,date,categoryID) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}
	
	public function updatePost($data){
		
		$sql='UPDATE posts SET title = ?, content = ?, date = ?, categoryID = ? WHERE pID = ?'; 
		
		$this->db->execute($sql,$data);
		
		$message = 'Post updated.';
		return $message;
		
	}
	
}