<?php
namespace Utils;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use App\Controllers\HomeController;

class Routing{
    public static function start($url){

        $router = new RouteCollector();

        $router->get('/', [HomeController::class, 'index']);

        $router->get('user', [HomeController::class, 'user']);

        # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
        $dispatcher = new Dispatcher($router->getData());

        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
            
        // Print out the value returned from the dispatched function
        echo $response;

    }
}

?>