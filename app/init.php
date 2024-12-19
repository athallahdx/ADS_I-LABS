<?php
spl_autoload_register(function ($class) {
    $directories = [
        'services/', 
        'core/', 
        'models/', 
        'controllers/' 
    ];
    
    foreach ($directories as $dir) {
        $file = $dir . $class . '.php'; 
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

// Now you can require other necessary files
require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'config/config.php';
require_once 'core/Database.php';
require_once 'core/BaseRepository.php';
require_once 'core/Session.php';
