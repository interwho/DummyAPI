<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$collection = new RouteCollection();

$collection->add(
    'PageController_root',
    new Route(
        '/',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::root'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

return $collection;
