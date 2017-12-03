<?php
class ManageCategoriesController extends Controller{
	
	public $categoryObject;
    protected $access = "1";
	
	public function index() {
		
        $this->categoryObject = new Categories();
        $categories = $this->categoryObject->getCategories();
        $this->set('categories',$categories);
        $this->set('title', 'Manage Categories');
    }
    public function modify($cID) {
		
        $this->categoryObject = new Categories();
        $category = $this->categoryObject->getCategory($cID);
        $this->set('category',$category);
        $this->set('title', 'Update Category Name');
    }
    public function update() {
		
        $data = array('name'=>$_POST['name'],'categoryID'=>$_POST['categoryID']);
        
        $this->categoryObject = new Categories();
        
        $result = $this->categoryObject->updateCategory($data);
        
        $categories = $this->categoryObject->getCategories();
        $this->set('categories',$categories);
        $this->set('title', 'Manage Categories');
        $this->set('message', $result);
        $this->set('task', 'update');
    }
    public function add() {
		
        $data = array('name'=>$_POST['name']);
        
        $this->categoryObject = new Categories();
        
        $result = $this->categoryObject->addCategory($data);
        
        $categories = $this->categoryObject->getCategories();
        $this->set('categories',$categories);
        $this->set('title', 'Manage Categories');
        $this->set('message', $result);
        $this->set('task', 'update');
    }
}