<?php

class HomeController extends Controller{
	
	public function index(){
		
		//video and assignment say two different things, assignment says url, $video says $feed
		$feed = "http://rss.nytimes.com/services/xml/rss/nyt/Technology.xml";
		$rss = new RssDisplay($feed);
		$html = "";
		$feed_data = $rss->getFeedItems(8);

		$channel = $rss->getChannelInfo();
		  
        $channel_title = $channel->title;
        $this->set('rss_title',$channel_title);
		
		 foreach($feed_data as $value) {
            $read_date = strtotime($value->pubDate);
            date_default_timezone_set('America/New_York');
            $read_date =  date("F j, Y, g:i a",$read_date);
            $html.= '<div><h4><a href="'.$value->link.'">'.$value -> title.'</a> ('.$read_date.')</h4><p>'.$value->description.'</p></div><hr/>';
        }
        $this->set('feed_data',$html);
	}
	
}

?>
