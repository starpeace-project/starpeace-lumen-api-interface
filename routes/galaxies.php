<?php

$router->group(["prefix" => "galaxies", "namespace" => "Galaxies"], function () use ($router) {
    $router->get('types', [ 'as' => 'types', 'uses' => 'GalaxyController@getTypes' ]);
    $router->get('get', [ 'as' => 'get', 'uses' => 'GalaxyController@getGalaxies' ]);
});