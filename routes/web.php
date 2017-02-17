<?php

use Symfony\Component\HttpFoundation\{Request, Response};

$app->get('/', function (Request $request, Silex\Application $app) {
    return new Response('Home', 200);
});
