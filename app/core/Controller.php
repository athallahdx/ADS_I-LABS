<?php

class Controller{
    public function view($view, $data = []) {
        extract($data);
        require_once '../app/views/' . $view . '.php';
    }
    

    public function model($model) {
        $modelPath = '../app/models/' . $model . '.php';
    
        // Check if the model file exists
        if (file_exists($modelPath)) {
            require_once $modelPath;
    
            // Ensure the class exists after resolving its namespace
            if (class_exists($model)) {
                return true;  
            } else {
                throw new Exception("Model Class not found: " . $model);
            }
        } else {
            throw new Exception("Model file not found: " . $modelPath);
        }
    }
    
    
    
}