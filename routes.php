<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/PostController.php';

$routes = [
    '/' => [
        'controller' => 'HomeController',
        'method' => 'index',
    ],
    '/register' => [
        'controller' => 'AuthController',
        'method' => 'register'
    ],
    '/login' => [
        'controller' => 'AuthController',
        'method' => 'login'
    ],
    '/logout' => [
        'controller' => 'AuthController',
        'method' => 'logout'
    ],
    '/handleRegister' => [
        'controller' => 'AuthController',
        'method' => 'handleRegister'
    ],
    '/handleLogin' => [
        'controller' => 'AuthController',
        'method' => 'handleLogin'
    ],
    '/profile' => [
        'controller' => 'UserController',
        'method' => 'profile'
    ],
    '/profile/edit' => [
        'controller' => 'UserController',
        'method' => 'edit',
    ],
    '/profile/handleEdit' => [
        'controller' => 'UserController',
        'method' => 'handleEdit',
    ],
    '/posts' => [
        'controller' => 'PostController',
        'method' => 'index',
    ],
    '/posts/show' => [
        'controller' => 'PostController',
        'method' => 'show',
    ],
    '/posts/edit' => [
        'controller' => 'PostController',
        'method' => 'edit',
    ],
    '/posts/main/create' => [
        'controller' => 'PostController',
        'method' => 'mainCreate'
    ],
    '/posts/create' => [
        'controller' => 'PostController',
        'method' => 'create'
    ],
    '/posts/delete' => [
        'controller' => 'PostController',
        'method' => 'delete'
    ],
    '/posts/update' => [
        'controller' => 'PostController',
        'method' => 'update'
    ],
];

// Get the incoming url e.g www.example.com/user [/user]
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // /users
$route = $routes[$url] ?? null;

if ($route) {
    $controller = new $route['controller']();
    $method = $route['method'];
    $controller->$method();
} else {
    header("HTTP/1.0 404 Not Found");
    require 'views/utilities/404.php';
}
?>
