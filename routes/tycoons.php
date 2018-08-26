<?php

$router->group(["prefix" => "tycoons", "namespace" => "Tycoons"], function () use ($router) {

    $router->get('getTycoonsByWorldAndInitial/{world_id:[0-9]{1,11}}/{initial:[a-zA-Z]{1}}', [
        'as' => 'get.tycoons.by.world.and.initial',
        'uses' => 'TycoonController@getTycoonsByWorldAndInitial'
    ]);

    $router->get('getTycoonsByWorld/{world_id:[0-9]{1,11}}', [
        'as' => 'get.tycoons.by.world',
        'uses' => 'TycoonController@getTycoonsByWorld'
    ]);

    $router->get('getTycoonsByInitial/{initial:[a-zA-Z]{1}}', [
        'as' => 'get.tycoons.by.initial',
        'uses' => 'TycoonController@getTycoonsByInitial'
    ]);

    $router->get('getTycoons', [
        'as' => 'get.tycoons',
        'uses' => 'TycoonController@getTycoons'
    ]);


});