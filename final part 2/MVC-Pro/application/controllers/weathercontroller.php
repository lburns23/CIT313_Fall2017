<?php

class WeatherController extends Controller{

	public function index(){
		
		$this->set('result',false);
	
	
	}
	
	public function getresults($weather) {
		
		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=36ed22802c064a28a00204229171211&q=".$_POST['zip']."&format=xml&num_of_days=2");
		$this->set('result',true);
		$this->set('weather', $xml);

	}
	
}

?>