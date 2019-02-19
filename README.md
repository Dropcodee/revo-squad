# PHP-CLEANCODE
A basic PHP boiler plate for writing clean php code using includes and basic php routing.

## Installation Steps
1. Clone the repository,
2.  use composer
```zsh
composer install
```
## After installation
1. Enter into the include directory select the **config.inc.php** Check code below
2. set your site title
3. set your application **Root url**
4. set your assets directory

## Using the router
1. Go into the **index.php** file
2. set your views folder for the router to load your views
3. You might need to set your virtual hosts for xampp or any server, make sure you set your virtual hosts
4. Then go into the **config.inc.php** file and set your virtualhost url to the siteurl variable.
5. Docs: [Klein Router docs](https://github.com/klein/klein.php)

## Code for config
```php
<?php

$SiteTitle = "YOUR SITE TITLE";

$SiteShortName = "YOUR SITE SHORT TITLE";

// site urls
$SiteUrl = "http://127.0.0.5:8080";
$rootUrl = $SiteUrl."/";
// assets folder urls
$AssetsUrl = $SiteUrl."/assets";

// css url in assets
$AssetsCssUrl = $AssetsUrl.'/css';

// javascript url in assets
$AssetsJsUrl =  $AssetsUrl.'/js';

?>
```

## Code for router
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';


$klein = new \Klein\Klein();


//Define Routes

//Page - Home
$klein->respond('GET', '/', function ($request, $response, $service, $app) {
    $service->render('views/home.php'); //Home Page in your views folder
});


//Handle Errors
$klein->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
            /*$router->response()->body(
                'Page Not Found'
            );*/
            $router->service()->render('views/404.php'); // your 404 error page in views folder
            break;
        case 405:
            $router->response()->body(
                'You can\'t do that!'
            );
            break;
        default:
            $router->response()->body(
                'Oh no, a bad error happened that caused a '. $code
            );
    }
});

$klein->dispatch();
```
