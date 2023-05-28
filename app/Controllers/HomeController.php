<?php

namespace App\Controllers;

use Appkit\Core\View;
use Throwable;

/**
 * Home controller
 *
 */
class HomeController
{
    /**
     * Show the index page
     *
     * @return string
     * @throws Throwable
     */
    public function indexAction(): string
    {
        return View::render('home/index', [
            'name'    => 'AppKit',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
