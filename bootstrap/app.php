<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application([
    'debug' => true,
]);

$app->register(new Silex\Provider\DoctrineServiceProvider, [
    'db.options' => [
        'driver'   => 'pdo_mysql',
        'host'     => 'localhost',
        'dbname'   => 'placekitten',
        'username' => 'root',
        'password' => '',
        'charset'  => 'utf8mb4'
    ],
]);

require __DIR__ . '/../routes/web.php';
