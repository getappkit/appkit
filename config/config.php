<?php

use Appkit\Http\Factory\Psr17Factory;
use Appkit\Http\ServerRequestCreator;
use App\Controllers\PhotoController;

return [
    'options' => [
        'debug' => true,
        'db' => [
            'driver'   => 'sqlite',
            'type'     => 'sqlite',
            'database' => BASE_DIR .'/database/data.sqlite', #full path to file
        ],
    ],
    'resources' => [
        'photos' => PhotoController::class
    ],
    'request' => function () {
        $psr17Factory = new Psr17Factory();

        $creator = new ServerRequestCreator(
            $psr17Factory, // ServerRequestFactory
            $psr17Factory, // UriFactory
            $psr17Factory, // UploadedFileFactory
            $psr17Factory  // StreamFactory
        );

        return $creator->fromGlobals();
    },
];
