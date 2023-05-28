<?php

use App\Controllers\PostController;
use Appkit\Exceptions\NextRouteException;
use Appkit\Http\Response;
use App\Models\User;



return [
    [
        'pattern' => '/',
        'action' => function () {
            return ['message' => 'Hello AppKit'];
        }
    ],
    [
        'pattern' => '/json',
        'action' => function () {
            return Response::json(['message' => 'Hello AppKit']);
        }
    ],
    [
        'pattern' => '/version',
        'action' => function () {

            return app()::VERSION;
        }
    ],
    [
        'pattern' => '/arguments/(:any)',
        'action' => function () {

            [$arg] = $this->arguments();

            return $arg;
        }
    ],
    [
        'pattern' => '/users',
        'action' => function () {

            $users = User::all();

            return $users->toArray();
        }
    ],
    [
        'pattern' => '/pages',
        'action' => function () {
            return app()->pages()->all();
        }
    ],
    [
        'pattern' => '/pages/(:any)',
        'action' => function ($slug) {

            $page = app()->pages()->find($slug);

            if (!isset($page)) {
                throw new NextRouteException();
            }

            return $page->render();
        }
    ],
    [
        'pattern' => 'post/(:num)/edit',
        'action' => [PostController::class, 'edit']
    ],
];




