<?php
use Cake\Routing\Router;

Router::plugin('Giant', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
