<?php

// $router=new Router();
// $router->dispatch();

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

$url = $_GET['url'] ?? 'home';

switch ($url) {
    case 'istichara':
        require 'index.php';
        break;
    case 'add':
        $controller = new controllers\PersonneController();
        $controller->createForm();
        break;
    case 'create':
        $controller = new controllers\PersonneController();
        $controller->create();
        break;
    case 'home':
        $home = new controllers\HomeController();
        $home->index();
        break;  
        case 'dashboard':
        $dashboard = new controllers\DashboardController();
        $dashboard->dashboard();
        break;   
    case 'search':
        $search = new controllers\SearchController();
        $search->index();
        break;
    default:
        echo "Page non trouvée";
}