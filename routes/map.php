<?php

$router->group(["prefix" => "map", "namespace" => "Maps"], function () use ($router) {
    $router->post('area', [ 'as' => 'area', 'uses' => 'AreaController@getArea' ]);
});