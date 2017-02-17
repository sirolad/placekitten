<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application([
    'debug' => true
]);

require __DIR__ . '/../routes/web.php';
