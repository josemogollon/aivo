<?php

use App\Controllers\TestHolaController;
use App\Controllers\ProfileFacebookController;

$app->get('/hola/{name}', TestHolaController::class . ':get');
$app->get('/profile/facebook/{id:[0-9]+}[/{extraFields}]', ProfileFacebookController::class . ':get');
