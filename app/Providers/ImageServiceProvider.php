<?php

namespace Sirolad\Providers;

use Intervention\Image\ImageManager;
use Pimple\{Container, ServiceProviderInterface};

class ImageServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['image'] = $app->factory(function () {
            return new ImageManager;
        });
    }
}
