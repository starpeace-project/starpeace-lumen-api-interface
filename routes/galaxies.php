<?php

$router->group(["prefix" => "galaxies", "namespace" => "Galaxies"], function () use ($router) {
    $router->get('getTypes', [ 'as' => 'types', 'uses' => 'GalaxyController@getTypes' ]);
    $router->get('getGalaxies', [ 'as' => 'get', 'uses' => 'GalaxyController@getGalaxies' ]);
});