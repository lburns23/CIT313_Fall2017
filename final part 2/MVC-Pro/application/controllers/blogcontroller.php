<?php

class BlogController extends Controller{
	
	public $postObject;
  
   	public function post($pID){
        $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
   	}
	
	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

	public function category($categoryID){
		$this->postObject = new Post();
		$categoryObject = new Categories();
		$posts = $this->postObject->getCatPosts($categoryID);
		$categoryName = $categoryObject->getCategory($categoryID);
		$title = "Posts in the ".$categoryName['name']." category";
		$this->set('title', $title);
		$this->set('posts',$posts);
	}	
}

?>