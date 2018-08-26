<?php

$router->group(["prefix" => "galaxies", "namespace" => "Galaxies"], function () use ($router) {

    $router->get('getGalaxy/{galaxy_id:[0-9]{1,11}}', [
        'as' => 'get.galaxy',
        'uses' => 'GalaxyController@getGalaxy'
    ]);

    $router->get('getGalaxies', [ 'as' => 'get', 'uses' => 'GalaxyController@getGalaxies' ]);

    $router->get('getGalaxyTypes', [ 'as' => 'types', 'uses' => 'GalaxyController@getGalaxyTypes' ]);
});