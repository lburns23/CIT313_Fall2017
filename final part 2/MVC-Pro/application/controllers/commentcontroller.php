<?php
class CommentController extends Controller{
	
	public $commentObject;
	
    public function add(){
        $this->commentObject = new Comment();
        $data = array('uID'=>$_SESSION['uID'],'commentText'=>$_POST['comment'],'date'=>date('Y-m-d H:i:s'),'postID'=>$_POST['postID']);
        $result = $this->commentObject->addComment($data);
        $this->set('messsage', $result);
        header('Location: '.BASE_URL.'blog/post/'.$_POST['postID']);
    }
    
    public function remove($commentID){
        $this->commentObject = new Comment();
        $comment = $this->commentObject->getComment($commentID);
        $result = $this->commentObject->deleteComment($commentID);
        $this->set('messsage', $result);
		header('Location: '.BASE_URL.'blog/post/'.$comment['postID']);
    }
}