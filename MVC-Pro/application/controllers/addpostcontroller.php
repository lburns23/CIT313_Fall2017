<?php

class AddPostController extends Controller{
	
	public $postObject;
	public $categoryObject;
	
	public function defaultTask(){
		
		$this->postObject = new Post();
		$this->set('task', 'add');
		
		$this->categoryObject = new Category();
		$categories = $this->categoryObject->getCategories();
		$this->set('categories',$categories);
	}
	
	public function add(){
		
			$this->postObject = new Post();
			
			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'], 'date'=>$_POST['post_date'],'categoryID'=>$_POST['post_categoryID']);
			
	
			$result = $this->postObject->addPost($data);
			
			$this->set('message', $result);
			
		
	}
	
	public function edit($pID){
		
			$this->postObject = new Post();

			$post = $this->postObject->getPost($pID);
			
			$this->set('pID', $post['pID']);
			$this->set('title', $post['title']);
			$this->set('content', $post['content']);
			$this->set('categories',$categories);
			$this->set('categoryID', $post['categoryID']);
			$this->set('task', 'update');
			
		
	}
	
	public function update(){
		
			$this->postObject = new Post();

			$data = array('title'=>$_POST['post_title'],'content'=>$_POST['post_content'],'categoryID'=>$_POST['post_categoryID'],'date'=>$_POST['post_date']),'pID'=>$_POST['pID']);
			
			$result = $this->postObject->updatePost($data);
			
			$this->set('message', $result);
	}
	
	
}
