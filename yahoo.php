<?php
class ygeo{
	// get your own APP ID
	public $appid = 'i4lyxm34';
	public $url = "http://where.yahooapis.com/geocode";
	public $location;
	public $format;
	public $query = array();
	function __construct( $format = 'J' ){
		$this->format = $format;
	}
	function look($address){
		$this->location = $address;
		return $this->load_json_from_url($this->buildquery($address));
	}
	function lookPostal($postal){
		$address = new stdClass();
		$address->postal = $postal;
		return $this->load_json_from_url($this->buildquery($address, 2));
	}
	function lookSpecific($addr, $city, $state, $postal){
		$address = new stdClass();
		$address->addr = $addr;
		$address->city = $city;
		$address->state = $state;
		$address->postal = $postal;
		return $this->load_json_from_url($this->buildquery($address, 0));
	}
	function buildquery($address, $type=1){
		$query = $this->url."?appid=".$this->appid."&flags=".$this->format;
		if($type == 0){
			$query .= "&addr=".urlencode($address->addr)."csz=".urlencode($address->city).",".urlencode($address->state).",".urlencode($address->postal);
		}else if($type == 1){
			$query .= "&location=".urlencode($address);
		}else if($type == 2){
			$query .= "&postal=".urlencode($address->postal)."&country=USA";
		}
		$this->query[] = $query;
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