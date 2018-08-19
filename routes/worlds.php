<?php

$router->group(['prefix' => 'worlds', 'namespace' => 'Worlds'], function () use ($router) {
    $router->get('getGalaxy/{galaxy_id:[0-9]{1,11}}', [
        'as' => 'get.galaxy',
        'uses' => 'WorldController@getGalaxy'
    ]);
});