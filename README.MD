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


## API CALLS

The purpose of this API is obviously the calls we can make and the data we can obtain.
Note: All data in the examples below are example data.

### Initial Calls

The following calls are those currently available

### /galaxies/getTypes

        /galaxies/getTypes
        
This will return a json list of available galaxy types:

        {
            "data": [
                {
                    "id": 1,
                    "name": "free",
                    "display_name": "Free",
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 2,
                    "name": "subscriber",
                    "display_name": "Subscriber",
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 3,
                    "name": "private",
                    "display_name": "Private",
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 4,
                    "name": "sponsored",
                    "display_name": "Sponsored",
                    "updated_at": "2018-08-22 22:40:50"
                }
            ]
        }
    
### /galaxies/getGalaxies    
        
        /galaxies/getGalaxies
        
This will return a full list of the galaxy types including the worlds within

        {
            "data": [
                {
                    "galaxy_id": 1,
                    "galaxy_type": "free",
                    "name": "Milky Way",
                    "updated_at": "2018-08-22 22:08:50",
                    "worlds": [
                        {
                            "id": 2,
                            "map_id": 2,
                            "display_name": "Winfield",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 11,
                            "map_id": 8,
                            "display_name": "Samir",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 13,
                            "map_id": 1,
                            "display_name": "Dixie",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 15,
                            "map_id": 4,
                            "display_name": "Hettie",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        }
                    ]
                },
                {
                    "galaxy_id": 2,
                    "galaxy_type": "subscriber",
                    "name": "Andromeda",
                    "updated_at": "2018-08-22 22:08:50",
                    "worlds": [
                        {
                            "id": 7,
                            "map_id": 9,
                            "display_name": "Hailee",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 8,
                            "map_id": 9,
                            "display_name": "Kellen",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        }
                    ]
                },
                {
                    "galaxy_id": 3,
                    "galaxy_type": "private",
                    "name": "Black Eye Galaxy",
                    "updated_at": "2018-08-22 22:08:50",
                    "worlds": [
                        {
                            "id": 1,
                            "map_id": 1,
                            "display_name": "Edward",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 6,
                            "map_id": 8,
                            "display_name": "Ova",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 14,
                            "map_id": 2,
                            "display_name": "Cayla",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 17,
                            "map_id": 3,
                            "display_name": "Brycen",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 18,
                            "map_id": 3,
                            "display_name": "Burnice",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 19,
                            "map_id": 5,
                            "display_name": "Laury",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 20,
                            "map_id": 10,
                            "display_name": "Arvilla",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        }
                    ]
                },
                {
                    "galaxy_id": 4,
                    "galaxy_type": "sponsored",
                    "name": "Virgo Stellar Stream",
                    "updated_at": "2018-08-22 22:08:50",
                    "worlds": [
                        {
                            "id": 3,
                            "map_id": 8,
                            "display_name": "Amelie",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 4,
                            "map_id": 3,
                            "display_name": "Lelia",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 5,
                            "map_id": 10,
                            "display_name": "Winona",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 9,
                            "map_id": 8,
                            "display_name": "Roger",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 10,
                            "map_id": 10,
                            "display_name": "Mike",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 12,
                            "map_id": 4,
                            "display_name": "Turner",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        },
                        {
                            "id": 16,
                            "map_id": 3,
                            "display_name": "Angus",
                            "year": 2000,
                            "updated_at": "2018-08-22 22:40:50"
                        }
                    ]
                }
            ]
        }
        
### /galaxies/getGalaxy/[n]

        /galaxies/getGalaxy/1
        
This will return the worlds in the given galaxy [n]

        {
            "data": [
                {
                    "id": 2,
                    "map_id": 2,
                    "display_name": "Winfield",
                    "year": 2000,
                    "investors": 9,
                    "online": 0,
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 11,
                    "map_id": 8,
                    "display_name": "Samir",
                    "year": 2000,
                    "investors": 8,
                    "online": 0,
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 13,
                    "map_id": 1,
                    "display_name": "Dixie",
                    "year": 2000,
                    "investors": 4,
                    "online": 0,
                    "updated_at": "2018-08-22 22:40:50"
                },
                {
                    "id": 15,
                    "map_id": 4,
                    "display_name": "Hettie",
                    "year": 2000,
                    "investors": 8,
                    "online": 0,
                    "updated_at": "2018-08-22 22:40:50"
                }
            ]
        }
        
This return includes details of how many tycoons are investors on each world along with how many investors were online within the last ten minutes.


<!-- HISTORY/ -->

<h2>History</h2>

<a href="https://github.com/starpeace-project/starpeace-lumen-api-interface/releases">Discover the release history by heading on over to the releases page.</a>

<!-- /HISTORY -->


<!-- BACKERS/ -->

<h2>Backers</h2>

<ul>
<li><a href="https://github.com/rwampler">Ross Wampler</a></li>
<li><a href="https://github.com/ronappleton">Ron Appleton</a></li>
</ul>

<h3>Maintainers</h3>

These amazing people are maintaining this project:

<ul>
<li><a href="https://github.com/ronappleton">Ron Appleton</a></li>
<li><a href="https://github.com/rwampler">Ross Wampler</a></li>
</ul>

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
