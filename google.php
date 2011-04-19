<?php
class ggeo{
	public $url = "http://maps.googleapis.com/maps/api/geocode/json?sensor=false";
	public $location;
	public $format;
	function __construct( $format = 'J' ){
		$this->format = $format;
	}
	function look($address){
		$this->location = $address;
		return $this->load_json_from_url($this->buildquery($address));
	}
	function buildquery($address){
		$query = $this->url."&address=".urlencode($address);
		return $query;
	}
	function load_file_from_url($url) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$str = curl_exec($curl);
		curl_close($curl);
		return $str;
	}
	function load_json_from_url($url) {
		return json_decode($this->load_file_from_url($url));
	}
}