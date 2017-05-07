<?php

class App 
{
    //default controller and method to call
	protected $controller = 'Home';
	protected $method = 'main';
	protected $params = [];

	public function __construct(){
		$url = $this->parseUrl();

        //checks if a controller exists with the keyworkd entered in the url as name
		if(file_exists('../app/Controller/' . $url[0] . '.php')){
			$this->controller = $url[0];
			unset($url[0]);
		}
		require_once '../app/Controller/' . $this->controller . '.php';

		//adds namespace to controller name and instantiates it
		$correctControllerName = "\Controller\\" . $this->controller;
		$this->controller = new $correctControllerName;


        //check for more url pieces to use as methods to call
		if(isset($url[1])) {
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->method], $this->params);
	}	

	public function parseUrl() {
		if (isset($_GET['url'])) {

			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}