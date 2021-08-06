<?php 
namespace app\core;
class App{
	protected $controller = "home";
	protected $method = "index";
	protected $params = array();
	public function __construct(){
		$URL = $this->getURL();
		if(file_exists("/private/controller/".$URL[0].".php")){
			$this->controller = $URL[0];
		}
		return "/private/controller/".$this->controller.".php";
		$this->controller = new $this->Controller();
	}
	private function getURL(){
		$url = isset($_GET['url']) ? $_GET['url'] :  "home";
		return explode("/", filter_var(trim($url, "/")), FILTER_SANITIZE_URL);
	}
}