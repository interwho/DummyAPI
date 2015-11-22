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

// Storage
$collection->add(
    'PageController_logrotate',
    new Route(
        '/frontend/logrotate',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::logrotate'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

$collection->add(
    'PageController_logsearch',
    new Route(
        '/frontend/logsearch',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::logsearch'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

$collection->add(
    'PageController_clear',
    new Route(
        '/frontend/clear',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::clear'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

// API
$collection->add(
    'PageController_usersGet',
    new Route(
        '/api/users',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::usersGet'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

$collection->add(
    'PageController_authenticationGet',
    new Route(
        '/api/authentication',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::authenticationGet'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

$collection->add(
    'PageController_postsGet',
    new Route(
        '/api/posts',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::postsGet'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

$collection->add(
    'PageController_logoutGet',
    new Route(
        '/api/logout',
        array(
            '_controller' => 'RequestCity\DummyAPI\Controllers\PageController::logoutGet'
        ),
        array(
            '_method' => 'GET'
        )
    )
);

return $collection;
