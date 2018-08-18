<!-- LOGO/ -->
<img src="starpeace-logo.png" width="180px" height="150px">
<!-- /LOGO -->

<!-- TITLE/ -->

<h1>Starpeace Lumen API Interface</h1>

<!-- /TITLE -->


<!-- BADGES/ -->
![GitHub release](https://img.shields.io/badge/Release-v0.0.1-brightgreen.svg) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/starpeace-project/starpeace-lumen-api-interface/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/starpeace-project/starpeace-lumen-api-interface/) [![Build Status](https://travis-ci.org/starpeace-project/starpeace-lumen-api-interface.svg?branch=master)](https://travis-ci.org/starpeace-project/starpeace-lumen-api-interface) [![Discourse chat](https://img.shields.io/badge/Discourse-Chat-blue.svg)](https://discord.gg/TF9Bmsj)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)  
<!-- /BADGES -->


<!-- DESCRIPTION/ -->

This API acts as the new interface server for the re-build of Starpeace, it will be the communication point of the Starpeace client.

<!-- /DESCRIPTION -->


<!-- INSTALL/ -->

<h2>Install</h2>

        composer require starpeace-project/starpeace-lumen-api-interface

<!-- /INSTALL -->

## Usage

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


<!-- HISTORY/ -->

<h2>History</h2>

<a href="https://github.com/starpeace-project/starpeace-lumen-api-interface/releases">Discover the release history by heading on over to the releases page.</a>

<!-- /HISTORY -->


<!-- BACKERS/ -->

<h2>Backers</h2>

<ul><li><a href="https://www.linkedin.com/in/rosswampler/">Ross Wampler</a></li></ul>

<h3>Maintainers</h3>

These amazing people are maintaining this project:

<ul><li><a href="https://www.linkedin.com/in/ron-appleton-b3066318/">Ron Appleton</a></li></ul>

<h3>Sponsors</h3>

No sponsors yet! Will you be the first?



<h3>Contributors</h3>

These amazing people have contributed code to this project:
<ul>
<li><a href="https://github.com/ronappleton">Ron Appleton</a> — <a href="https://github.com/starpeace-project/starpeace-lumen-api-interface/commits?author=ronappleton" title="View the GitHub contributions of Ron Appleton on repository starpeace-project/starpeace-lumen-api-interface">view contributions</a></li>
</ul>

<!-- /BACKERS -->


<!-- LICENSE/ -->

<h2>License</h2>

Unless stated otherwise all works are:

<ul><li>Copyright &copy; 2018 <a href="http://www.linkedin.com/in/ron-appleton-b3066318/">Ron Appleton</a></li></ul>

and licensed under:

<ul><li><a href="http://spdx.org/licenses/MIT.html">MIT License</a></li></ul>

<!-- /LICENSE -->
