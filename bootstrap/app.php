<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application([
    'debug' => true,
]);

$app->register(new Moust\Silex\Provider\CacheServiceProvider, [
    'cache.options' => [
        'driver' => 'file',
        'cache_dir' => __DIR__ . '/../cache/images',
    ],
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

$app->register(new Sirolad\Providers\ImageServiceProvider);

require __DIR__ . '/../routes/web.php';
