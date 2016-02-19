<?php
use Cake\Routing\Router;

Router::prefix('admin', function ($routes) {
    $routes->connect(
        '/', [
            'plugin' => 'Quiz',
            'controller' => 'Users',
            'action' => 'coucou'
        ]
    );
    $routes->fallbacks('InflectedRoute');
});

Router::plugin(
    'Quiz',
    ['path' => '/quiz'],
    function ($routes) {
    	$routes->connect('/',['controller'=>'Users','action'=>'index']);
        $routes->fallbacks('DashedRoute');
    }
);
