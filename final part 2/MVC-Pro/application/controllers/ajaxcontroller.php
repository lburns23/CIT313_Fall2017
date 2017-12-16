<?php

class AjaxController extends Controller{
	
	protected $postObject;
	protected $commentObject;
	protected $userObject;
	protected $categoryObject;
	protected $weatherObject;
	
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
	
	public function get_weather_content($weather) {
		
		$this->weatherObject = new Weather();
		
		$weather = $this->weatherObject->getresults($_GET['weather']);
		
		$this->set('response', $weather);

	}
}

?>