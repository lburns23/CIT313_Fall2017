<?php
class Comment extends Model{
	
    public function getPostComments($postID){
		
        $sql = 'select commentID, commentText, date, first_name, last_name from comments c inner join users u on c.uID = u.uID where postID = ? order by date desc';
        
		$results = $this->db->execute($sql, $postID);
       
	   while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }
        return $comments;
    }
	
    public function getComment($commentID){
    
        $sql = 'select commentID, commentText, date, first_name, last_name, postID from comments c inner join users u on c.uID = u.uID where commentID = ?';
      
	    $results = $this->db->getrow($sql, $commentID);
        
		return $results;
    }
	
    public function addcomment($data){
      
	  $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
       
	  $this->db->execute($sql,$data);
      
	  $message = 'Comment added.';
	   
	  return $message;
	 
    }
	
    public function deleteComment($commentID) {
      
	  $sql = 'delete from comments where commentID = ?';
        
	  $this->db->execute($sql, $commentID);
        
	  $message = "Comment removed.";
       
      return $message;
    }
}