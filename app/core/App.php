<?php

class App {
    protected $controller = 'LandingPage';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // Controller
        if ($url && isset($url[0])) {
            $controllerFile = '../app/controllers/' . ucfirst($url[0]) . '.php';
            if (file_exists($controllerFile)) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            } else {
                $this->controller = 'Error';  // Default to Error controller
            }
        }

        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                $this->method = 'index';  // Default to 'index' method
            }
        }

        // Params
        $this->params = !empty($url) ? array_values($url) : [];

        // Call the controller method with params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [];
    }
}
