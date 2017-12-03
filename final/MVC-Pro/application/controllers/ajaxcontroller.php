<?php

class AjaxController extends Controller{
	
	protected $postObject;
	protected $commentObject;
	protected $userObject;
	protected $categoryObject;
	
	public function index(){
		$this->set("response","Invalid Request");
	}
	
	public function get_post_content() {
		
		$this->postObject = new Post();
		
		$post = $this->postObject->getPost($_GET['pID']);
		
		$this->set('response',$post['content']);
		
		
	}

	public function get_comment_content() {
		
        $this->commentObject = new Comment();
		
        $comments = $this->commentObject->getPostComments($_GET['postID']);
		
        $this->set('response', $comments);
		
    }
	
	
}

?>