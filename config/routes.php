<?php
use Cake\Routing\Router;

Router::plugin(
    'Quiz',
    ['path' => '/quiz'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
