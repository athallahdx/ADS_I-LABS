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
                unset($url[0]); // Remove controller from URL
            } else {
                $this->controller = 'Error';  // Default to Error controller
            }
        }

        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Method (Check if the second part of URL is a download method)
        if (isset($url[1])) {
            // Check if the method is a 'download' method (e.g., downloadTugas, downloadTugasKumpul)
            if (preg_match('/^download/', $url[1]) && isset($url[2])) {
                $this->method = $url[1];  // Dynamically set the method based on URL
                $this->params = [$url[2]]; // Pass the filename as a parameter
            } elseif (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];  // Set method if it exists in controller
                unset($url[1]);  // Remove method from URL
            } else {
                $this->method = 'index';  // Default to 'index' method if method does not exist
            }
        }

        $this->params = array_values($url);  // Pass the rest of

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

