<img src="https://github.com/ronappleton/starpeace-public-documents/blob/master/starpeace-logo.png" width="180px" height="150px"> Starpeace Project Lumen API  
-----------------------------------------------------------------------------------------------------------------
[![Build Status](https://travis-ci.org/starpeace-project/starpeace-lumen-api-interface.svg?branch=master)](https://travis-ci.org/starpeace-project/starpeace-lumen-api-interface)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/starpeace-project/starpeace-lumen-api-interface/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/starpeace-project/starpeace-lumen-api-interface/) 
![GitHub release](https://img.shields.io/badge/Release-v0.0.1-brightgreen.svg) [![Discourse chat](https://img.shields.io/badge/Discourse-Chat-blue.svg)](https://discord.gg/TF9Bmsj)




### Installed routes

Verb | Path | NamedRoute | Controller | Action | Middleware
--- | --- | --- | --- | --- | ---
POST   | /oauth/token                             |            | \Laravel\Passport\Http\Controllers\AccessTokenController           | issueToken | -
GET    | /oauth/tokens                            |            | \Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController | forUser    | auth
DELETE | /oauth/tokens/{token_id}                 |            | \Laravel\Passport\Http\Controllers\AuthorizedAccessTokenController | destroy    | auth
POST   | /oauth/token/refresh                     |            | \Laravel\Passport\Http\Controllers\TransientTokenController        | refresh    | auth
GET    | /oauth/clients                           |            | \Laravel\Passport\Http\Controllers\ClientController                | forUser    | auth
POST   | /oauth/clients                           |            | \Laravel\Passport\Http\Controllers\ClientController                | store      | auth
PUT    | /oauth/clients/{client_id}               |            | \Laravel\Passport\Http\Controllers\ClientController                | update     | auth
DELETE | /oauth/clients/{client_id}               |            | \Laravel\Passport\Http\Controllers\ClientController                | destroy    | auth
GET    | /oauth/scopes                            |            | \Laravel\Passport\Http\Controllers\ScopeController                 | all        | auth
GET    | /oauth/personal-access-tokens            |            | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController   | forUser    | auth
POST   | /oauth/personal-access-tokens            |            | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController   | store      | auth
DELETE | /oauth/personal-access-tokens/{token_id} |            | \Laravel\Passport\Http\Controllers\PersonalAccessTokenController   | destroy    | auth

## License

The Starpeace API is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
