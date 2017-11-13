<?php

class RssDisplay extends Model {

    protected $feed_url;
	protected $numItems;
	
    public function __construct($url){
		
	parent::__construct();
	
	$this->feed_url = $url;
	
	}
	
	public function getFeedItems($numItems) {
		
		$items = simplexml_load_file($this->feed_url);
		
		return $items;
		
		
	}

}
