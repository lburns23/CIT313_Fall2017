<?php

class HomeController extends Controller{
	
	public function index(){
		
		//video and assignment say two different things, assignment says url, $video says $feed
		$feed = "http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml";
		$rss = new RssDisplay($feed);
		
		$feed_data = $rss->getFeedItems();

		
		$channel_title = $feed_data->channel->title;
		
		$this->set('rss_title',$channel_title);
	}
	
}

?>